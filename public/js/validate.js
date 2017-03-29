function isEven(v) {
	return v % 2 === 0;
} 

var dates = {
	/**
	 * Converts the date in d to a date-object. 
	 * 
	 * The input can be: 
	 * 
	 * a date object: returned without modification 
	 * an array : Interpreted as [year,month,day]. NOTE: month is 0-11. 
	 * a number : Interpreted as number of milliseconds since 1 Jan 1970 (a timestamp) 
	 * a string : Any format supported by the javascript engine, like "YYYY/MM/DD", "MM/DD/YYYY", "Jan 31 2009" etc. 
	 * an object : Interpreted as an object with year, month and date attributes. NOTE: month is 0-11.
	 * 
	 * @param d
	 *            value to be converted to date object.
	 * @returns a Date object.
	 */
    convert:function(d) {
        return (
            d.constructor === Date ? d :
            d.constructor === Array ? new Date(d[0],d[1],d[2]) :
            d.constructor === Number ? new Date(d) :
            d.constructor === String ? new Date(d) :
            typeof d === "object" ? new Date(d.year,d.month,d.date) :
            NaN
        );
    },
    
    /** Compares two dates (could be of any type supported by the convert
     * function above) 
     * 
     * @returns
     *  	-1 : if a < b
     *   	0 : if a = b
     *   	1 : if a > b
     * 		NaN : if a or b is an illegal date
     * 		NOTE: The code inside isFinite does an assignment (=). 
     */
    compare:function(a,b) {
        return (
            isFinite(a=this.convert(a).valueOf()) &&
            isFinite(b=this.convert(b).valueOf()) ?
            (a>b)-(a<b) :
            NaN
        );
    },
    
    /** Checks if date in d is between dates in start and end.
     * 
     * @param d the date to check if between the given range.
     * @param start the start date.
     * @param end the end of the range.
     * 
     * @returns a boolean or NaN.
     *    	true  : if d is between start and end (inclusive)
     *    	false : if d is before start or after end
     *    	NaN   : if one or more of the dates is illegal.
     *    	NOTE: The code inside isFinite does an assignment (=).
     */
    inRange:function(d,start,end) {
       return (
            isFinite(d=this.convert(d).valueOf()) &&
            isFinite(start=this.convert(start).valueOf()) &&
            isFinite(end=this.convert(end).valueOf()) ?
            start <= d && d <= end :
            NaN
        );
    }
    
}

function valEmail(str) {

	var at="@";
	var dot=".";
	var lat=str.indexOf(at);
	var lstr=str.length;
	var ldot=str.indexOf(dot);
		
	if (lat==-1 || lat==0 || lat==lstr){return false;} // no @ sign
	if (ldot==-1 || ldot==0 || ldot==lstr){return false;} // no dot
	if (str.indexOf(at,(lat+1))!=-1){return false;} // more than one @ sign
	if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){return false;} // dot next to @ sign
	if (str.indexOf(dot,(lat+2))==-1){return false;} // no dot after @ sign
	if (str.indexOf(" ")!=-1){return false;} // has a space
	if (str.indexOf(",")!=-1){return false;} // has a comma

	return true;					
	
}

function valDate(str){

	var minYear=1900;
	var maxYear=2100;
	var dtCh= "/";
	var daysInMonth = [31, 29, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

	var pos1=str.indexOf(dtCh);
	var pos2=str.indexOf(dtCh,pos1+1);
	var pos1dash=str.indexOf('-');
	var pos2dash=str.indexOf('-',pos1dash+1);
	
	if ((pos1==-1 && pos1dash==-1) || (pos2==-1 && pos2dash==-1)) {return false;}  // missing one or both delimiters
	
	if (pos1dash != -1) {pos1 = pos1dash;} // if delimiters are a dash set location
	if (pos2dash != -1) {pos2 = pos2dash;} // if delimiters are a dash set location
	
	var strMonth=str.substring(0,pos1);
	var strDay=str.substring(pos1+1,pos2);
	var strYear=str.substring(pos2+1);
	
	var month=parseInt(strMonth,10);
	var day=parseInt(strDay,10);
	var year=parseInt(strYear,10);

	if (year < 100) {year = year + 2000;}
	
	if (strMonth.length<1 || month<1 || month>12){return false;} // invalid month
	if (strDay.length<1 || day<1 || day > daysInMonth[month-1]){return false;} // invalid day
	if (strYear.length < 2 || year<minYear || year>maxYear){return false;} // invalid year

	return true;

}

function compareDates(str1, str2){

	var date1 = getDate(str1);
	var date2 = getDate(str2);

	var dateDiff = (date2-date1)/86400000;
	
	if (date1 > date2) {return 1;}
	
	if (dateDiff > 365) {return 2;}	
		
	return 0;

}

function valTime(str1){

	var str = $.trim(str1);
	var posColon = str.indexOf(":");
	var posSpace = str.indexOf(" ");
	var posAM = str.toUpperCase().indexOf("AM");
	var posPM = str.toUpperCase().indexOf("PM");
	var posAMPM;
	var strHour;
	
	// Validate AM PM 
	
	if (posAM == -1 && posPM == -1) {return false;}
	if (posAM != -1) {posAMPM = posAM;} else {posAMPM = posPM;}
	
	if (posColon != -1) {    // there's a colon, validate minutes
	
		if (posSpace != -1 && str.length > 8){return false;} // has a space and length too long
		if (posSpace == -1 && str.length > 7){return false;} // no space and length too long

		var strMinute=str.substr(posColon+1,2);
		var minute = parseInt(strMinute,10);

		if (isNaN(strMinute)==true){return false;} // Minute not a number
		if (minute>59){return false;} // invalid minute
	
		strHour = str.substring(0,posColon);
				
	} else {
	
		if (posSpace != -1 && str.length > 5){return false;} // has a space and length too long
		if (posSpace == -1 && str.length > 4){return false;} // no space and length too long
		
		if (posSpace != -1) {strHour = str.substring(0,posSpace);} else {strHour = str.substring(0,posAMPM);}
		
	}
	
	if (isNaN(strHour)==true){return false;} // Hour not a number
		
	var hour = parseInt(strHour,10);

	if (strHour.length<1 || hour<1 || hour>12){return false;} // invalid hour

	return true;

}

function calculatePayment(str1, str2, numTeachers){

	var subscriptionDate = getDate(str1);
	var paymentDate = getDate(str2);
	var currentDate = new Date ();
	
	var numDays;

	// use greater of current date or old subscription date to compute numDays
	if (currentDate > subscriptionDate) {
		numDays = (paymentDate-currentDate)/86400000;
	} else {
		numDays = (paymentDate-subscriptionDate)/86400000;	
	}
	
	var price = 12 / 365;  // base price per day,

	// determine discount % based on number of teachers
	if (numTeachers <= 50) {
		price = price * .9;
	} else if (numTeachers <= 200) {
		price = price * .8;
	} else if (numTeachers <= 500) {
		price = price * .7;
	} else {
		price = price * .6;
	}
	
	return numDays * numTeachers * price;

}

function getDate(str1) {
	
	var dtCh= "/";
	var pos1=str1.indexOf(dtCh);
	var pos2=str1.indexOf(dtCh,pos1+1);

	var pos1dash=str1.indexOf('-');
	var pos2dash=str1.indexOf('-',pos1dash+1);
	
	if (pos1dash != -1) {pos1 = pos1dash;}
	if (pos2dash != -1) {pos2 = pos2dash;}
		
	var strMonth1=str1.substring(0,pos1);
	var strDay1=str1.substring(pos1+1,pos2);
	var strYear1=str1.substring(pos2+1);
	
	var month1=parseInt(strMonth1,10);
	var day1=parseInt(strDay1,10);
	var year1=parseInt(strYear1,10);

	var date1 = new Date (year1, month1-1, day1);

	return date1;

}

