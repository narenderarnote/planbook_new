<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/getSettings', function () {
    return '{
  "tab6TextBold": "N",
  "attachmentsLabelItalic": "N",
  "tab6LabelFillColor": "#ffffff",
  "dateFormat": 1,
  "attachmentsLabelBold": "Y",
  "infoMsg": "",
  "tab3TextFillColor": "#ffffff",
  "currentYearId": "713428",
  "strategiesTextBold": "N",
  "sharedStandardsDisplayOrder": 8,
  "myStandardsSize": "10",
  "schoolStandardsTextFillColor": "#ffffff",
  "sharedStandardsLabelUnderline": "N",
  "schoolStandardsTextSize": "10",
  "assessmentsHide": "N",
  "myStandardsLabel": "My List",
  "showBanner": "N",
  "strategiesSize": "10",
  "studentUsername": "",
  "lessonTitleDisplaysettingsId": 0,
  "myStandardsTextSize": "10",
  "tab2LabelBold": "Y",
  "tab4TextSize": "10",
  "sunShow": "N",
  "schoolStandardsTextItalic": "N",
  "strategiesTextItalic": "N",
  "boxSize": 100,
  "tab5Font": "2",
  "schoolStandardsEnabled": "Y",
  "sharedStandardsSize": "10",
  "eventLabelDisplaySettingsId": 0,
  "schoolStandardsLabelFillColor": "#ffffff",
  "letterGrades": [
    
  ],
  "tab2TextItalic": "N",
  "lessonTitleLabelFillColor": "#ffffff",
  "tab4TextUnderline": "N",
  "tab5LabelUnderline": "N",
  "assignmentsTextSize": "10",
  "lessonTextSize": "10",
  "attachmentsLabelFillColor": "#ffffff",
  "schoolStandardsLabelBold": "Y",
  "schoolStandardsTextColor": "#000000",
  "strategiesTextFillColor": "#ffffff",
  "strategiesLabelUnderline": "N",
  "registeredDate": "03/17/2017",
  "schoolStandardsTextUnderline": "N",
  "displayName": "Jeetu",
  "strategiesTextFont": "2",
  "strategiesLabelItalic": "N",
  "lessonDisplayOrder": 1,
  "myStandardsTextColor": "#000000",
  "tab3TextItalic": "N",
  "eventLabelItalic": "N",
  "tab4LabelBold": "Y",
  "tab2Font": "2",
  "tab5TextUnderline": "N",
  "viewNotes": "N",
  "sharedStandardsFont": "2",
  "eventTextBold": "N",
  "tab3TextBold": "N",
  "tab4TextFont": "2",
  "schoolName": "DPS",
  "eventTextUnderline": "N",
  "lessonLabelUnderline": "N",
  "tab6LabelUnderline": "N",
  "tab4Hide": "N",
  "tab6LabelItalic": "N",
  "schoolStandardsDisplaySettingsId": 0,
  "tab2DisplayOrder": 2,
  "tab4Size": "10",
  "schoolStandardsColor": "#000000",
  "districtName": "",
  "schoolStandardsTextFont": "2",
  "myStandardsFont": "2",
  "tab3DisplayOrder": 3,
  "schoolStandardsLabelItalic": "N",
  "userId": 1349256,
  "schoolStandardsHide": "N",
  "strategiesLabelFillColor": "#ffffff",
  "strategiesTextUnderline": "N",
  "extend3": "04/17/2020",
  "wedShow": "Y",
  "extend2": "04/17/2019",
  "sharedStandardsTextFillColor": "#ffffff",
  "lessonSize": "10",
  "lessonTextFont": "2",
  "eventTextItalic": "N",
  "extend1": "04/17/2018",
  "tab4Label": "Section 4",
  "tab4DisplayOrder": 4,
  "tab6DisplayOrder": 6,
  "currentState": "TX",
  "lessonLabelItalic": "N",
  "sharedStandardsTextUnderline": "N",
  "tab5DisplaySettingsId": 0,
  "tab5DisplayOrder": 5,
  "attachmentsColor": "#000000",
  "newCommentA": "N",
  "myStandardsLabelBold": "Y",
  "tab4LabelUnderline": "N",
  "tab5TextItalic": "N",
  "myStandardsEnabled": "N",
  "assessmentsTextSize": "10",
  "tab2Color": "#000000",
  "myStandardsTextUnderline": "N",
  "tab3Label": "Notes",
  "tab5LabelItalic": "N",
  "tab6TextUnderline": "N",
  "adjustToFit": "N",
  "lessonFont": "2",
  "currentGradingPeriodId": 0,
  "lessonLabelFillColor": "#ffffff",
  "tueShow": "Y",
  "emailAddress": "jitendra@techsparksit.com",
  "tab2Label": "Homework",
  "attachmentsTextSize": "10",
  "tab6TextSize": "10",
  "currentSubject": "FA1",
  "newCommentT": "N",
  "tab4TextBold": "N",
  "sharedStandardsColor": "#000000",
  "tab3TextFont": "2",
  "strategiesEnabled": "N",
  "freeCount": 0,
  "assessmentsTextUnderline": "N",
  "lessonTextColor": "#000000",
  "lessonTextBold": "N",
  "lessonLabel": "Lesson",
  "viewLessons": "Y",
  "assessmentsDisplaySettingsId": 0,
  "tab3Color": "#000000",
  "eventLabelBold": "Y",
  "tab5TextColor": "#000000",
  "tab6Font": "2",
  "assessmentsTextItalic": "N",
  "schoolStandardsTextBold": "N",
  "homeWorkDisplaySettingsId": 0,
  "tab6Enabled": "N",
  "strategiesTextColor": "#000000",
  "firstName": "Jitendra",
  "tab6LabelBold": "Y",
  "viewStrategies": "N",
  "studentNotes": "",
  "tab3TextUnderline": "N",
  "hasToken": "N",
  "assignmentsTextColor": "#000000",
  "tab2TextUnderline": "N",
  "tab5LabelFillColor": "#ffffff",
  "assignmentsLabelBold": "Y",
  "viewTab6": "N",
  "tab3TextSize": "10",
  "strategiesDisplayOrder": 10,
  "viewTab5": "N",
  "viewTab4": "N",
  "tab6TextFillColor": "#ffffff",
  "tab6TextFont": "2",
  "assignmentsHide": "N",
  "tab2TextFillColor": "#ffffff",
  "myStandardsLabelItalic": "N",
  "attachmentsTextItalic": "N",
  "lessonColor": "#000000",
  "tab4DisplaySettingsId": 0,
  "attachmentsTextColor": "#000000",
  "alertMsg": "",
  "tab2LabelUnderline": "N",
  "assignmentsLabelItalic": "N",
  "tab3Hide": "N",
  "lessonDisplaySettingsId": 0,
  "strategiesHide": "N",
  "sendEmail": "N",
  "assessmentsTextFillColor": "#ffffff",
  "tab2TextColor": "#000000",
  "tab4LabelFillColor": "#ffffff",
  "assessmentsLabelItalic": "N",
  "infoCount": 3,
  "assessmentsColor": "#000000",
  "tab3LabelUnderline": "N",
  "viewGrades": "N",
  "attachmentsDisplaySettingsId": 0,
  "tab3Enabled": "Y",
  "tab2LabelFillColor": "#ffffff",
  "tab4TextItalic": "N",
  "eventLabelFillColor": "#c3d9ff",
  "attachmentsTextFont": "2",
  "sharedStandardsLabelBold": "Y",
  "myStandardsTextFillColor": "#ffffff",
  "strategiesTextSize": "10",
  "tab5Size": "10",
  "tab3LabelFillColor": "#ffffff",
  "districtId": 0,
  "tab3LabelBold": "Y",
  "eventLabelUnderline": "N",
  "attachmentsFont": "2",
  "assignmentsLabelUnderline": "N",
  "assignmentsLabelFillColor": "#ffffff",
  "assignmentsSize": "10",
  "assignmentsDisplaySettingsId": 0,
  "tab5TextFont": "2",
  "tab2TextBold": "N",
  "years": [
    {
      "tueCycle": "Y",
      "strategiesDisplayOrder": 10,
      "thuCycle": "Y",
      "strategiesLabel": "Instructional Strategies",
      "sunCycle": "N",
      "tab9Label": "School List",
      "hideClassIds": "",
      "tab6Label": "Section 6",
      "tab3Label": "Notes",
      "yearId": 713428,
      "tab7Enabled": false,
      "tab8Enabled": true,
      "tab9Enabled": false,
      "tab5Label": "Section 5",
      "lessonLayoutId": 0,
      "tab2Label": "Homework",
      "tab8Label": "Standards",
      "lastDay": "03/31/2017",
      "convertStatus": 2,
      "friCycle": "Y",
      "yearName": "2016",
      "strategiesEnabled": false,
      "satCycle": "N",
      "tab2DisplayOrder": 2,
      "tab3DisplayOrder": 3,
      "tab3Enabled": true,
      "tab1Label": "Lesson",
      "monCycle": "Y",
      "tab1Enabled": true,
      "tab5Enabled": false,
      "tab2Enabled": true,
      "tab4Enabled": false,
      "tab6Enabled": false,
      "tab1DisplayOrder": 1,
      "tab9DisplayOrder": 9,
      "tab8DisplayOrder": 8,
      "firstDay": "03/18/2017",
      "tab7DisplayOrder": 7,
      "tab4Label": "Section 4",
      "tab4DisplayOrder": 4,
      "tab6DisplayOrder": 6,
      "tab7Label": "My List",
      "wedCycle": "Y",
      "tab5DisplayOrder": 5
    }
  ],
  "displayItems": "YYYYYYYYYYYYYYYYYY",
  "assessmentsLabelFillColor": "#ffffff",
  "showCount": "N",
  "strategiesDisplaySettingsId": 0,
  "attachmentsTextFillColor": "#ffffff",
  "convertStatus": 2,
  "myStandardsLabelFillColor": "#ffffff",
  "assessmentsFont": "2",
  "tab3LabelItalic": "N",
  "tab6Color": "#000000",
  "lessonEnabled": "Y",
  "attachmentsTextBold": "N",
  "viewEvents": "Y",
  "tab3Size": "10",
  "assessmentsTextBold": "N",
  "classHeadOrder": "1",
  "tab5Hide": "N",
  "strategiesLabelBold": "Y",
  "myStandardsTextItalic": "N",
  "tab6TextColor": "#000000",
  "yearNeeded": "N",
  "lessonTitleColor": "#000000",
  "attachmentsSize": "10",
  "lessonTextFillColor": "#ffffff",
  "tab4LabelItalic": "N",
  "assignmentsTextItalic": "N",
  "subPlans": "",
  "assignmentsTextBold": "N",
  "gradingPeriods": [
    
  ],
  "lastName": "Kumar",
  "sharedStandardsDisplaySettingsId": 0,
  "payments": [
    
  ],
  "viewStandards": "N",
  "schoolStandardsLabel": "School List",
  "myStandardsHide": "N",
  "standardWeights": [
    
  ],
  "showStateIds": [
    "TX"
  ],
  "schoolDistrict": "Mohali",
  "sharedStandardsLabelItalic": "N",
  "tab4Font": "2",
  "eventLabelFont": "2",
  "myStandardsDisplayOrder": 7,
  "assessmentsSize": "10",
  "schoolId": "",
  "tab5TextSize": "10",
  "paidThroughDate": "04/17/2017",
  "eventLabelSize": "10",
  "attachmentsTextUnderline": "N",
  "viewHomework": "Y",
  "sharedStandardsHide": "N",
  "sharedStandardsLabel": "Standards",
  "sharedStandardsTextSize": "10",
  "classCycle": "twoWeeks",
  "dateDelimiter": "/",
  "sharedStandardsTextColor": "#000000",
  "eventTextFillColor": "#ffffff",
  "equalSize": "N",
  "tab5Enabled": "N",
  "assessmentsLabelBold": "Y",
  "viewAssignments": "Y",
  "eventLabelColor": "#0000ff",
  "studentPassword": "",
  "tab3TextColor": "#000000",
  "tab4Color": "#000000",
  "eventEnabled": "Y",
  "hasStandards": "N",
  "assignmentsTextFont": "2",
  "schoolStandardsFont": "2",
  "thuShow": "Y",
  "tab2Hide": "N",
  "tab6Size": "10",
  "assessmentsTextFont": "2",
  "satShow": "N",
  "codes": [
    {
      "name": "Australia - National Curriculum (ACARA)",
      "id": "A1"
    },
    {
      "name": "Australia - New South Wales",
      "id": "A2"
    },
    {
      "name": "Australia - Victoria",
      "id": "A3"
    },
    {
      "name": "Australia - Western Curriculum (SCSA)",
      "id": "A4"
    },
    {
      "name": "Canada - Alberta",
      "id": "C2"
    },
    {
      "name": "Canada - British Columbia",
      "id": "C4"
    },
    {
      "name": "Canada - Manitoba",
      "id": "C6"
    },
    {
      "name": "Canada - New Brunswick",
      "id": "C3"
    },
    {
      "name": "Canada - Newfoundland and Labrador",
      "id": "C7"
    },
    {
      "name": "Canada - Nova Scotia",
      "id": "C8"
    },
    {
      "name": "Canada - Ontario",
      "id": "C1"
    },
    {
      "name": "Canada - Saskatchewan",
      "id": "C5"
    },
    {
      "name": "England - Cambridge IGCSE",
      "id": "U4"
    },
    {
      "name": "England - CEFR",
      "id": "U3"
    },
    {
      "name": "England - National Curriculum (2014)",
      "id": "U2"
    },
    {
      "name": "Scotland - Curriculum for Excellence",
      "id": "S1"
    },
    {
      "name": "New Zealand - National Curriculum",
      "id": "NZ"
    },
    {
      "name": "New Zealand - Te Marautanga o Aotearoa",
      "id": "NZ2"
    },
    {
      "name": "Mexico - National Curriculum",
      "id": "M1"
    },
    {
      "name": "Puerto Rico - Core Standards (PRCS)",
      "id": "PR1"
    },
    {
      "name": "International Baccalaureate (IB)",
      "id": "N32"
    },
    {
      "name": "International Primary Curriculum (IPC)",
      "id": "N45"
    },
    {
      "name": "U.S. - 21st Century Learning Framework",
      "id": "N13"
    },
    {
      "name": "U.S. - Academy of Sciences (NAS)",
      "id": "N33"
    },
    {
      "name": "U.S. - ACT Quality Core",
      "id": "N8"
    },
    {
      "name": "U.S. - Agriculture Science Education (AFNR)",
      "id": "N25"
    },
    {
      "name": "U.S. - American Education Reaches Out (AERO)",
      "id": "N27"
    },
    {
      "name": "U.S. - American Sign Language (ASLTA)",
      "id": "N50"
    },
    {
      "name": "U.S. - Automotive Technicians Foundation 2014 (NATEF)",
      "id": "N22"
    },
    {
      "name": "U.S. - AVID College Readiness System",
      "id": "N11"
    },
    {
      "name": "U.S. - Bloom\'s Taxonomy",
      "id": "N4"
    },
    {
      "name": "U.S. - Business Education (NBEA)",
      "id": "NB"
    },
    {
      "name": "U.S. - Catholic Curriculum Framework",
      "id": "N7"
    },
    {
      "name": "U.S. - Center and State Collaborative (NCSC)",
      "id": "N39"
    },
    {
      "name": "U.S. - Center for Construction Education and Research (NCCER)",
      "id": "N44"
    },
    {
      "name": "U.S. - Classical Language (ACL)",
      "id": "N28"
    },
    {
      "name": "U.S. - College Board",
      "id": "N12"
    },
    {
      "name": "U.S. - Common Career Technical Core (NASDCTEc)",
      "id": "N5"
    },
    {
      "name": "U.S. - Common Core",
      "id": "CC"
    },
    {
      "name": "U.S. - Common Core Essential Elements",
      "id": "EE"
    },
    {
      "name": "U.S. - Computer Science Teachers Association (CSTA)",
      "id": "N35"
    },
    {
      "name": "U.S. - Core Arts Standards (NCCAS)",
      "id": "N10"
    },
    {
      "name": "U.S. - Core Knowledge Foundation",
      "id": "N42"
    },
    {
      "name": "U.S. - Danielson Teaching Strategies",
      "id": "N36"
    },
    {
      "name": "U.S. - Desired Results Development Profile (DRDP)",
      "id": "N40"
    },
    {
      "name": "U.S. - DoDEA",
      "id": "DD"
    },
    {
      "name": "U.S. - Driver Education",
      "id": "N26"
    },
    {
      "name": "U.S. - Emergency Medical Services (EMS-NHTSA)",
      "id": "N34"
    },
    {
      "name": "U.S. - English Language Proficiency (CCSSO)",
      "id": "N14"
    },
    {
      "name": "U.S. - Family and Consumer (NASAFACS)",
      "id": "NF"
    },
    {
      "name": "U.S. - Film Study",
      "id": "N46"
    },
    {
      "name": "U.S. - Financial Literacy (CEE)",
      "id": "N21"
    },
    {
      "name": "U.S. - Fine Arts (NAEA)",
      "id": "NA"
    },
    {
      "name": "U.S. - Geographic Education (GENIP)",
      "id": "N17"
    },
    {
      "name": "U.S. - Gifted Programming Standards (NAGC)",
      "id": "G1"
    },
    {
      "name": "U.S. - Head Start Learning Domains",
      "id": "HS"
    },
    {
      "name": "U.S. - Health Education",
      "id": "NH"
    },
    {
      "name": "U.S. - Healthcare Foundation (NCHSE)",
      "id": "N20"
    },
    {
      "name": "U.S. - HighScope Preschool",
      "id": "N29"
    },
    {
      "name": "U.S. - InTASC Teaching Standards (CCSSO)",
      "id": "N23"
    },
    {
      "name": "U.S. - Leader in Me (7 Habits)",
      "id": "N16"
    },
    {
      "name": "U.S. - Library Program (AASL)",
      "id": "NL"
    },
    {
      "name": "U.S. - Manufacturing Skills Standards Council (MSSC)",
      "id": "N48"
    },
    {
      "name": "U.S. - Marzano\'s Instructional Strategies",
      "id": "N3"
    },
    {
      "name": "U.S. - MBA Research",
      "id": "N37"
    },
    {
      "name": "U.S. - Mindsets and Behaviors (ASCA)",
      "id": "N24"
    },
    {
      "name": "U.S. - Music Education (NAfME)",
      "id": "N2"
    },
    {
      "name": "U.S. - National Center for History in Schools (NCHS)",
      "id": "N51"
    },
    {
      "name": "U.S. - Next Generation Science Standards (NGSS)",
      "id": "NG"
    },
    {
      "name": "U.S. - North American Montessori Center (NAMC)",
      "id": "N38"
    },
    {
      "name": "U.S. - Personal Finance (Jump$tart)",
      "id": "N31"
    },
    {
      "name": "U.S. - Physical Education (SHAPE)",
      "id": "NP"
    },
    {
      "name": "U.S. - PrintED Competencies (GAERF)",
      "id": "PC"
    },
    {
      "name": "U.S. - Project Lead the Way (PLTW)",
      "id": "N49"
    },
    {
      "name": "U.S. - Psychology (APA)",
      "id": "N30"
    },
    {
      "name": "U.S. - School Counseling Program (ASCA)",
      "id": "N1"
    },
    {
      "name": "U.S. - Seventh Day Adventist NAD",
      "id": "N41"
    },
    {
      "name": "U.S. - Social Emotional Learning (CASEL)",
      "id": "N47"
    },
    {
      "name": "U.S. - Social Studies (NCSS)",
      "id": "N9"
    },
    {
      "name": "U.S. - Standards for Technological Literacy (ITEEA)",
      "id": "N15"
    },
    {
      "name": "U.S. - Technology (ISTE-NETS)",
      "id": "NT"
    },
    {
      "name": "U.S. - Universal Design for Learning (UDL)",
      "id": "N19"
    },
    {
      "name": "U.S. - Virgin Islands",
      "id": "N43"
    },
    {
      "name": "U.S. - WIDA",
      "id": "WD"
    },
    {
      "name": "U.S. - World Languages (ACTFL)",
      "id": "NW"
    },
    {
      "name": "U.S. State - Alabama",
      "id": "AL"
    },
    {
      "name": "U.S. State - Alaska",
      "id": "AK"
    },
    {
      "name": "U.S. State - Arizona",
      "id": "AZ"
    },
    {
      "name": "U.S. State - Arkansas",
      "id": "AR"
    },
    {
      "name": "U.S. State - California",
      "id": "CA"
    },
    {
      "name": "U.S. State - Colorado",
      "id": "CO"
    },
    {
      "name": "U.S. State - Connecticut",
      "id": "CT"
    },
    {
      "name": "U.S. State - Delaware",
      "id": "DE"
    },
    {
      "name": "U.S. State - Florida",
      "id": "FL"
    },
    {
      "name": "U.S. State - Georgia",
      "id": "GA"
    },
    {
      "name": "U.S. State - Hawaii",
      "id": "HI"
    },
    {
      "name": "U.S. State - Idaho",
      "id": "ID"
    },
    {
      "name": "U.S. State - Illinois",
      "id": "IL"
    },
    {
      "name": "U.S. State - Indiana",
      "id": "IN"
    },
    {
      "name": "U.S. State - Iowa",
      "id": "IA"
    },
    {
      "name": "U.S. State - Kansas",
      "id": "KS"
    },
    {
      "name": "U.S. State - Kentucky",
      "id": "KY"
    },
    {
      "name": "U.S. State - Louisiana",
      "id": "LA"
    },
    {
      "name": "U.S. State - Maine",
      "id": "ME"
    },
    {
      "name": "U.S. State - Maryland",
      "id": "MD"
    },
    {
      "name": "U.S. State - Massachusetts",
      "id": "MA"
    },
    {
      "name": "U.S. State - Michigan",
      "id": "MI"
    },
    {
      "name": "U.S. State - Minnesota",
      "id": "MN"
    },
    {
      "name": "U.S. State - Mississippi",
      "id": "MS"
    },
    {
      "name": "U.S. State - Missouri",
      "id": "MO"
    },
    {
      "name": "U.S. State - Montana",
      "id": "MT"
    },
    {
      "name": "U.S. State - Nebraska",
      "id": "NE"
    },
    {
      "name": "U.S. State - Nevada",
      "id": "NV"
    },
    {
      "name": "U.S. State - New Hampshire",
      "id": "NX"
    },
    {
      "name": "U.S. State - New Jersey",
      "id": "NJ"
    },
    {
      "name": "U.S. State - New Mexico",
      "id": "NM"
    },
    {
      "name": "U.S. State - New York",
      "id": "NY"
    },
    {
      "name": "U.S. State - North Carolina",
      "id": "NC"
    },
    {
      "name": "U.S. State - North Dakota",
      "id": "ND"
    },
    {
      "name": "U.S. State - Ohio",
      "id": "OH"
    },
    {
      "name": "U.S. State - Oklahoma",
      "id": "OK"
    },
    {
      "name": "U.S. State - Oregon",
      "id": "OR"
    },
    {
      "name": "U.S. State - Pennsylvania",
      "id": "PA"
    },
    {
      "name": "U.S. State - Rhode Island",
      "id": "RI"
    },
    {
      "name": "U.S. State - South Carolina",
      "id": "SC"
    },
    {
      "name": "U.S. State - South Dakota",
      "id": "SD"
    },
    {
      "name": "U.S. State - Tennessee",
      "id": "TN"
    },
    {
      "name": "U.S. State - Texas",
      "id": "TX"
    },
    {
      "name": "U.S. State - Utah",
      "id": "UT"
    },
    {
      "name": "U.S. State - Vermont",
      "id": "VT"
    },
    {
      "name": "U.S. State - Virginia",
      "id": "VA"
    },
    {
      "name": "U.S. State - Washington",
      "id": "WA"
    },
    {
      "name": "U.S. State - Washington D.C",
      "id": "DC"
    },
    {
      "name": "U.S. State - West Virginia",
      "id": "WV"
    },
    {
      "name": "U.S. State - Wisconsin",
      "id": "WI"
    },
    {
      "name": "U.S. State - Wyoming",
      "id": "WY"
    },
    {
      "name": "Local - Alhekma International School",
      "id": "L2"
    },
    {
      "name": "Local - Cleveland Metropolitan Schools",
      "id": "L1"
    },
    {
      "name": "Local - Archdiocese of Baltimore",
      "id": "D2"
    },
    {
      "name": "Local - Archdiocese of Chicago",
      "id": "D12"
    },
    {
      "name": "Local - Archdiocese of Denver",
      "id": "D3"
    },
    {
      "name": "Local - Archdiocese of Detroit",
      "id": "D9"
    },
    {
      "name": "Local - Archdiocese of Galveston-Houston",
      "id": "D4"
    },
    {
      "name": "Local - Archdiocese of Hartford",
      "id": "D52"
    },
    {
      "name": "Local - Archdiocese of Indianapolis",
      "id": "D37"
    },
    {
      "name": "Local - Archdiocese of Los Angeles",
      "id": "D11"
    },
    {
      "name": "Local - Archdiocese of Louisville",
      "id": "D23"
    },
    {
      "name": "Local - Archdiocese of Milwaukee",
      "id": "D15"
    },
    {
      "name": "Local - Archdiocese of Omaha",
      "id": "D28"
    },
    {
      "name": "Local - Archdiocese of Portland",
      "id": "D14"
    },
    {
      "name": "Local - Archdiocese of Saint Paul and Minneapolis",
      "id": "D36"
    },
    {
      "name": "Local - Archdiocese of San Antonio",
      "id": "D48"
    },
    {
      "name": "Local - Archdiocese of Seattle",
      "id": "D44"
    },
    {
      "name": "Local - Archdiocese of Washington, D.C.",
      "id": "D53"
    },
    {
      "name": "Local - Diocese of Amarillo",
      "id": "D5"
    },
    {
      "name": "Local - Diocese of Arlington",
      "id": "D24"
    },
    {
      "name": "Local - Diocese of Boise",
      "id": "D46"
    },
    {
      "name": "Local - Diocese of Buffalo",
      "id": "D43"
    },
    {
      "name": "Local - Diocese of Cincinnati",
      "id": "D33"
    },
    {
      "name": "Local - Diocese of Cleveland",
      "id": "D19"
    },
    {
      "name": "Local - Diocese of Columbus",
      "id": "D13"
    },
    {
      "name": "Local - Diocese of Davenport",
      "id": "D45"
    },
    {
      "name": "Local - Diocese of Des Moines",
      "id": "D39"
    },
    {
      "name": "Local - Diocese of Fort Worth",
      "id": "D26"
    },
    {
      "name": "Local - Diocese of Fresno",
      "id": "D47"
    },
    {
      "name": "Local - Diocese of Green Bay",
      "id": "D29"
    },
    {
      "name": "Local - Diocese of Jefferson City",
      "id": "D20"
    },
    {
      "name": "Local - Diocese of Joliet",
      "id": "D16"
    },
    {
      "name": "Local - Diocese of Kalamazoo",
      "id": "D8"
    },
    {
      "name": "Local - Diocese of Kansas City-St. Joseph",
      "id": "D21"
    },
    {
      "name": "Local - Diocese of Las Vegas",
      "id": "D59"
    },
    {
      "name": "Local - Diocese of Madison",
      "id": "D17"
    },
    {
      "name": "Local - Diocese of Memphis",
      "id": "D32"
    },
    {
      "name": "Local - Diocese of Nashville",
      "id": "D34"
    },
    {
      "name": "Local - Diocese of Oakland",
      "id": "D38"
    },
    {
      "name": "Local - Diocese of Ogdensburg",
      "id": "D42"
    },
    {
      "name": "Local - Diocese of Orlando",
      "id": "D30"
    },
    {
      "name": "Local - Diocese of Owensboro",
      "id": "D41"
    },
    {
      "name": "Local - Diocese of Palm Beach",
      "id": "D51"
    },
    {
      "name": "Local - Diocese of Paterson",
      "id": "D49"
    },
    {
      "name": "Local - Diocese of Phoenix",
      "id": "D7"
    },
    {
      "name": "Local - Diocese of Raleigh",
      "id": "D18"
    },
    {
      "name": "Local - Diocese of Richmond",
      "id": "D6"
    },
    {
      "name": "Local - Diocese of Sacramento",
      "id": "D50"
    },
    {
      "name": "Local - Diocese of Salt Lake",
      "id": "D31"
    },
    {
      "name": "Local - Diocese of San Bernardino",
      "id": "D25"
    },
    {
      "name": "Local - Diocese of San Diego",
      "id": "D54"
    },
    {
      "name": "Local - Diocese of San Jose",
      "id": "D35"
    },
    {
      "name": "Local - Diocese of Sioux City",
      "id": "D55"
    },
    {
      "name": "Local - Diocese of Springfield",
      "id": "D58"
    },
    {
      "name": "Local - Diocese of St. Augustine",
      "id": "D22"
    },
    {
      "name": "Local - Diocese of St. Louis",
      "id": "D57"
    },
    {
      "name": "Local - Diocese of St. Petersburg",
      "id": "D56"
    },
    {
      "name": "Local - Diocese of Toledo",
      "id": "D27"
    },
    {
      "name": "Local - Diocese of Tuscon",
      "id": "D40"
    },
    {
      "name": "Local - Diocese of Wichita",
      "id": "D10"
    },
    {
      "name": "Local - Diocese of Wilmington",
      "id": "D1"
    }
  ],
  "tab2TextSize": "10",
  "eventTextDisplaySettingsId": 0,
  "tab4TextColor": "#000000",
  "strategiesLabel": "Instructional Strategies",
  "schoolStandardsLabelUnderline": "N",
  "friShow": "Y",
  "tab5TextFillColor": "#ffffff",
  "myStandardsLabelUnderline": "N",
  "monShow": "Y",
  "tab2LabelItalic": "N",
  "schoolPastDue": "N",
  "autosaveInterval": 30,
  "viewMyList": "N",
  "sharedStandardsTextFont": "2",
  "tab5LabelBold": "Y",
  "assignmentsTextFillColor": "#ffffff",
  "tab6TextItalic": "N",
  "strategiesFont": "2",
  "myStandardsTextBold": "N",
  "sharedUserKey": "",
  "teacherNotes": "<p>teacher notes............................<\/p>",
  "myStandardsTextFont": "2",
  "assessmentsLabelUnderline": "N",
  "myStandardsDisplaySettingsId": 0,
  "schoolStandardsSize": "10",
  "tab2Enabled": "Y",
  "tab4Enabled": "N",
  "lessonTitleLabelUnderline": "N",
  "lessonHide": "Y",
  "attachmentsLabelUnderline": "N",
  "lessonTitleSize": "10",
  "lessonTextUnderline": "N",
  "tab2Size": "10",
  "tab6Hide": "N",
  "userType": "T",
  "strategiesColor": "#000000",
  "schoolSuspendAccount": "N",
  "tab3Font": "2",
  "tab6Label": "Section 6",
  "tab6DisplaySettingsId": 0,
  "tab4TextFillColor": "#ffffff",
  "tab5Color": "#000000",
  "viewLength": 0,
  "tab5Label": "Section 5",
  "viewAssessments": "Y",
  "schoolStandardsDisplayOrder": 9,
  "assignmentsColor": "#000000",
  "assignmentsTextUnderline": "N",
  "sharedStandardsTextBold": "N",
  "strategyGroup": [
    {
      "value": "AVID WICOR",
      "key": "ST004"
    },
    {
      "value": "Kagan Structures",
      "key": "ST001"
    },
    {
      "value": "Marzano Strategies",
      "key": "ST002"
    },
    {
      "value": "Universal Design for Learning (UDL)",
      "key": "ST003"
    }
  ],
  "myStandardsColor": "#000000",
  "lessonTitleLabelItalic": "N",
  "tab3DisplaySettingsId": 0,
  "sharedStandardsEnabled": "Y",
  "promoCode": "null",
  "tab2TextFont": "2",
  "tab5TextBold": "N",
  "lastLogon": "03/27/2017",
  "lessonLabelBold": "Y",
  "sharedStandardsLabelFillColor": "#ffffff",
  "currentGrade": 0,
  "assessmentsTextColor": "#000000",
  "classHeadCentered": "N",
  "assignmentsFont": "2",
  "lessonTextItalic": "N",
  "eventLabel": "Event",
  "schoolLabel": "",
  "displayListClass": 6902928,
  "attachmentsHide": "N",
  "lessonTitleLabelBold": "Y",
  "sharedStandardsTextItalic": "N",
  "lessonTitleFont": "2",
  "scoreWeights": [
    
  ]
}';
});


Route::get('/getClasses2', function () {
	return 	'{"classes":[{"wk2tT":"Y","sEt":"","classLabelUnderline":false,"uEt":"","mT":"Y","wEt":"","cSd":"03/18/2017","wk2uSt":"","currentSubject":"FA1","wk2wSt":"","wk2sSt":"","wk2fEt":"","wk2mSt":"","collaborateSubjectId":0,"classLabelItalic":false,"wk2sT":"N","rT":"Y","wk2wT":"Y","wk2tEt":"","fT":"Y","mSt":"","wk2rEt":"","wk2fT":"Y","fEt":"","sSt":"","uSt":"","wSt":"","wT":"Y","wk2rT":"Y","cC":"#3640ad","rEt":"","sT":"N","tEt":"","collaborateYearId":0,"wk2fSt":"","classLabelBold":false,"cN":"English","titleSize":"10","units":[],"wk2mEt":"","titleColor":"#FFFFFF","wk2rSt":"","wk2mT":"Y","wk2tSt":"","cId":6902928,"tT":"Y","cEd":"03/31/2017","wk2uT":"N","currentGrade":0,"wk2wEt":"","collaborateType":0,"collaborateTeacherId":0,"fSt":"","wk2sEt":"","wk2uEt":"","useSchoolEnd":"N","titleFont":"2","rSt":"","tSt":"","useSchoolStart":"N","currentState":"TX","mEt":"","uT":"N"},{"wk2tT":"Y","sEt":"10:00 AM","classLabelUnderline":false,"uEt":"10:00 AM","mT":"Y","wEt":"10:00 AM","cSd":"03/18/2017","wk2uSt":"","wk2wSt":"","wk2sSt":"","wk2fEt":"","wk2mSt":"","collaborateSubjectId":0,"classLabelItalic":false,"wk2sT":"Y","rT":"Y","wk2wT":"Y","wk2tEt":"","fT":"Y","mSt":"9:00 AM","wk2rEt":"","wk2fT":"Y","fEt":"10:00 AM","sSt":"9:00 AM","uSt":"9:00 AM","wSt":"9:00 AM","wT":"Y","wk2rT":"Y","cC":"#65ad89","rEt":"10:00 AM","sT":"Y","tEt":"10:00 AM","collaborateYearId":0,"wk2fSt":"","classLabelBold":true,"cN":"Maths","titleSize":"10","units":[],"wk2mEt":"","titleColor":"#ffffff","collaborateKey":"","wk2rSt":"","wk2mT":"Y","wk2tSt":"","cId":6915542,"tT":"Y","cEd":"10/31/2017","wk2uT":"Y","currentGrade":0,"wk2wEt":"","collaborateType":0,"collaborateTeacherId":0,"fSt":"9:00 AM","wk2sEt":"","wk2uEt":"","useSchoolEnd":"N","titleFont":"2","rSt":"9:00 AM","tSt":"9:00 AM","useSchoolStart":"Y","mEt":"10:00 AM","uT":"Y"},{"wk2tT":"Y","sEt":"9:00 AM","classLabelUnderline":false,"uEt":"9:00 AM","mT":"Y","wEt":"9:00 AM","cSd":"03/18/2017","wk2uSt":"8:15 AM","wk2wSt":"8:15 AM","wk2sSt":"8:15 AM","wk2fEt":"9:00 AM","wk2mSt":"8:15 AM","collaborateSubjectId":0,"classLabelItalic":false,"wk2sT":"N","rT":"Y","wk2wT":"Y","wk2tEt":"9:00 AM","fT":"Y","mSt":"7:45 AM","wk2rEt":"9:00 AM","wk2fT":"Y","fEt":"9:00 AM","sSt":"7:45 AM","uSt":"7:45 AM","wSt":"7:45 AM","wT":"Y","wk2rT":"Y","cC":"#c7561e","rEt":"9:00 AM","sT":"Y","tEt":"9:00 AM","collaborateYearId":0,"wk2fSt":"8:15 AM","classLabelBold":true,"cN":"maths","titleSize":"10","units":[],"wk2mEt":"9:00 AM","titleColor":"#ffffff","collaborateKey":"","wk2rSt":"8:15 AM","wk2mT":"Y","wk2tSt":"8:15 AM","cId":6915544,"tT":"Y","cEd":"03/31/2017","wk2uT":"N","currentGrade":0,"wk2wEt":"9:00 AM","collaborateType":0,"collaborateTeacherId":0,"fSt":"7:45 AM","wk2sEt":"9:00 AM","wk2uEt":"9:00 AM","useSchoolEnd":"N","titleFont":"2","rSt":"7:45 AM","tSt":"7:45 AM","useSchoolStart":"Y","mEt":"9:00 AM","uT":"Y"}],"currentYearId":713428}';

});


Route::get('getLessonsEvents', function(){
	return '{"days":[{"date":"03/19/2017","cD":"Week 2","dayOfWeek":"Sunday","objects":[{"attachments":[],"assignments":[],"color":"#65ad89","classLabelUnderline":"N","asgAttachments":[],"classLabelBold":"Y","tab4Text":"","extraLesson":0,"unitNum":"","className":"Maths","titleSize":"10","type":"L","unitTitle":"","homeworkText":"","classId":6915542,"customStart":"","asmAttachments":[],"titleColor":"#ffffff","t6Template":"N","schoolStandards":[],"t4Template":"N","msTemplate":"N","unitId":0,"startTime":"","t5Template":"N","collaborateSubjectId":0,"classLabelItalic":"N","sTemplate":"N","tab5Text":"","hTemplate":"N","assessments":[],"customEnd":"","strategies":[],"myStandards":[],"collaborateType":0,"lessonLock":"N","lessonText":"","ssTemplate":"N","titleFont":"2","tab6Text":"","standards":[],"lTemplate":"N","teacherId":1349256,"lessonTitle":"","nTemplate":"N","endTime":"","notesText":""}],"count":-1},{"date":"03/20/2017","cD":"Week 2","dayOfWeek":"Monday","objects":[{"attachments":[],"assignments":[],"color":"#c7561e","classLabelUnderline":"N","asgAttachments":[],"classLabelBold":"Y","tab4Text":"","extraLesson":0,"unitNum":"","className":"maths","titleSize":"10","type":"L","unitTitle":"","homeworkText":"","classId":6915544,"customStart":"","asmAttachments":[],"titleColor":"#ffffff","t6Template":"N","schoolStandards":[],"t4Template":"N","msTemplate":"N","unitId":0,"startTime":"8:15 AM","t5Template":"N","collaborateSubjectId":0,"classLabelItalic":"N","sTemplate":"N","tab5Text":"","hTemplate":"N","assessments":[],"customEnd":"","strategies":[],"myStandards":[],"collaborateType":0,"lessonLock":"N","lessonText":"","ssTemplate":"N","titleFont":"2","tab6Text":"","standards":[],"lTemplate":"N","teacherId":1349256,"lessonTitle":"","nTemplate":"N","endTime":"9:00 AM","notesText":""},{"attachments":[],"assignments":[],"color":"#3640ad","classLabelUnderline":"N","asgAttachments":[],"classLabelBold":"N","tab4Text":"","extraLesson":0,"unitNum":"","className":"English","titleSize":"10","type":"L","unitTitle":"","homeworkText":"","classId":6902928,"customStart":"","asmAttachments":[],"titleColor":"#FFFFFF","t6Template":"N","schoolStandards":[],"t4Template":"N","msTemplate":"N","unitId":0,"startTime":"","t5Template":"N","collaborateSubjectId":0,"classLabelItalic":"N","sTemplate":"N","tab5Text":"","hTemplate":"N","assessments":[],"customEnd":"","strategies":[],"myStandards":[],"collaborateType":0,"lessonLock":"N","lessonText":"","ssTemplate":"N","titleFont":"2","tab6Text":"","standards":[],"lTemplate":"N","teacherId":1349256,"lessonTitle":"","nTemplate":"N","endTime":"","notesText":""},{"attachments":[],"assignments":[],"color":"#65ad89","classLabelUnderline":"N","asgAttachments":[],"classLabelBold":"Y","tab4Text":"","extraLesson":0,"unitNum":"","className":"Maths","titleSize":"10","type":"L","unitTitle":"","homeworkText":"","classId":6915542,"customStart":"","asmAttachments":[],"titleColor":"#ffffff","t6Template":"N","schoolStandards":[],"t4Template":"N","msTemplate":"N","unitId":0,"startTime":"","t5Template":"N","collaborateSubjectId":0,"classLabelItalic":"N","sTemplate":"N","tab5Text":"","hTemplate":"N","assessments":[],"customEnd":"","strategies":[],"myStandards":[],"collaborateType":0,"lessonLock":"N","lessonText":"","ssTemplate":"N","titleFont":"2","tab6Text":"","standards":[],"lTemplate":"N","teacherId":1349256,"lessonTitle":"","nTemplate":"N","endTime":"","notesText":""}],"count":1},{"date":"03/21/2017","cD":"Week 2","dayOfWeek":"Tuesday","objects":[{"attachments":[],"assignments":[],"color":"#c7561e","classLabelUnderline":"N","asgAttachments":[],"classLabelBold":"Y","tab4Text":"","extraLesson":0,"unitNum":"","className":"maths","titleSize":"10","type":"L","unitTitle":"","homeworkText":"","classId":6915544,"customStart":"","asmAttachments":[],"titleColor":"#ffffff","t6Template":"N","schoolStandards":[],"t4Template":"N","msTemplate":"N","unitId":0,"startTime":"8:15 AM","t5Template":"N","collaborateSubjectId":0,"classLabelItalic":"N","sTemplate":"N","tab5Text":"","hTemplate":"N","assessments":[],"customEnd":"","strategies":[],"myStandards":[],"collaborateType":0,"lessonLock":"N","lessonText":"","ssTemplate":"N","titleFont":"2","tab6Text":"","standards":[],"lTemplate":"N","teacherId":1349256,"lessonTitle":"","nTemplate":"N","endTime":"9:00 AM","notesText":""},{"attachments":[],"assignments":[],"color":"#3640ad","classLabelUnderline":"N","asgAttachments":[],"classLabelBold":"N","tab4Text":"","extraLesson":0,"unitNum":"","className":"English","titleSize":"10","type":"L","unitTitle":"","homeworkText":"","classId":6902928,"customStart":"","asmAttachments":[],"titleColor":"#FFFFFF","t6Template":"N","schoolStandards":[],"t4Template":"N","msTemplate":"N","unitId":0,"startTime":"","t5Template":"N","collaborateSubjectId":0,"classLabelItalic":"N","sTemplate":"N","tab5Text":"","hTemplate":"N","assessments":[],"customEnd":"","strategies":[],"myStandards":[],"collaborateType":0,"lessonLock":"N","lessonText":"","ssTemplate":"N","titleFont":"2","tab6Text":"","standards":[],"lTemplate":"N","teacherId":1349256,"lessonTitle":"","nTemplate":"N","endTime":"","notesText":""},{"attachments":[],"assignments":[],"color":"#65ad89","classLabelUnderline":"N","asgAttachments":[],"classLabelBold":"Y","tab4Text":"","extraLesson":0,"unitNum":"","className":"Maths","titleSize":"10","type":"L","unitTitle":"","homeworkText":"","classId":6915542,"customStart":"","asmAttachments":[],"titleColor":"#ffffff","t6Template":"N","schoolStandards":[],"t4Template":"N","msTemplate":"N","unitId":0,"startTime":"","t5Template":"N","collaborateSubjectId":0,"classLabelItalic":"N","sTemplate":"N","tab5Text":"","hTemplate":"N","assessments":[],"customEnd":"","strategies":[],"myStandards":[],"collaborateType":0,"lessonLock":"N","lessonText":"","ssTemplate":"N","titleFont":"2","tab6Text":"","standards":[],"lTemplate":"N","teacherId":1349256,"lessonTitle":"","nTemplate":"N","endTime":"","notesText":""}],"count":2},{"date":"03/22/2017","cD":"Week 2","dayOfWeek":"Wednesday","objects":[{"attachments":[],"assignments":[],"color":"#c7561e","classLabelUnderline":"N","asgAttachments":[],"classLabelBold":"Y","tab4Text":"","extraLesson":0,"unitNum":"","className":"maths","titleSize":"10","type":"L","unitTitle":"","homeworkText":"","classId":6915544,"customStart":"","asmAttachments":[],"titleColor":"#ffffff","t6Template":"N","schoolStandards":[],"t4Template":"N","msTemplate":"N","unitId":0,"startTime":"8:15 AM","t5Template":"N","collaborateSubjectId":0,"classLabelItalic":"N","sTemplate":"N","tab5Text":"","hTemplate":"N","assessments":[],"customEnd":"","strategies":[],"myStandards":[],"collaborateType":0,"lessonLock":"N","lessonText":"","ssTemplate":"N","titleFont":"2","tab6Text":"","standards":[],"lTemplate":"N","teacherId":1349256,"lessonTitle":"","nTemplate":"N","endTime":"9:00 AM","notesText":""},{"attachments":[],"assignments":[],"color":"#3640ad","classLabelUnderline":"N","asgAttachments":[],"classLabelBold":"N","tab4Text":"","extraLesson":0,"unitNum":"","className":"English","titleSize":"10","type":"L","unitTitle":"","homeworkText":"","classId":6902928,"customStart":"","asmAttachments":[],"titleColor":"#FFFFFF","t6Template":"N","schoolStandards":[],"t4Template":"N","msTemplate":"N","unitId":0,"startTime":"","t5Template":"N","collaborateSubjectId":0,"classLabelItalic":"N","sTemplate":"N","tab5Text":"","hTemplate":"N","assessments":[],"customEnd":"","strategies":[],"myStandards":[],"collaborateType":0,"lessonLock":"N","lessonText":"","ssTemplate":"N","titleFont":"2","tab6Text":"","standards":[],"lTemplate":"N","teacherId":1349256,"lessonTitle":"","nTemplate":"N","endTime":"","notesText":""},{"attachments":[],"assignments":[],"color":"#65ad89","classLabelUnderline":"N","asgAttachments":[],"classLabelBold":"Y","tab4Text":"","extraLesson":0,"unitNum":"","className":"Maths","titleSize":"10","type":"L","unitTitle":"","homeworkText":"","classId":6915542,"customStart":"","asmAttachments":[],"titleColor":"#ffffff","t6Template":"N","schoolStandards":[],"t4Template":"N","msTemplate":"N","unitId":0,"startTime":"","t5Template":"N","collaborateSubjectId":0,"classLabelItalic":"N","sTemplate":"N","tab5Text":"","hTemplate":"N","assessments":[],"customEnd":"","strategies":[],"myStandards":[],"collaborateType":0,"lessonLock":"N","lessonText":"","ssTemplate":"N","titleFont":"2","tab6Text":"","standards":[],"lTemplate":"N","teacherId":1349256,"lessonTitle":"","nTemplate":"N","endTime":"","notesText":""}],"count":3},{"date":"03/23/2017","cD":"Week 2","dayOfWeek":"Thursday","objects":[{"attachments":[],"assignments":[],"color":"#c7561e","classLabelUnderline":"N","asgAttachments":[],"classLabelBold":"Y","tab4Text":"","extraLesson":0,"unitNum":"","className":"maths","titleSize":"10","type":"L","unitTitle":"","homeworkText":"","classId":6915544,"customStart":"","asmAttachments":[],"titleColor":"#ffffff","t6Template":"N","schoolStandards":[],"t4Template":"N","msTemplate":"N","unitId":0,"startTime":"8:15 AM","t5Template":"N","collaborateSubjectId":0,"classLabelItalic":"N","sTemplate":"N","tab5Text":"","hTemplate":"N","assessments":[],"customEnd":"","strategies":[],"myStandards":[],"collaborateType":0,"lessonLock":"N","lessonText":"","ssTemplate":"N","titleFont":"2","tab6Text":"","standards":[],"lTemplate":"N","teacherId":1349256,"lessonTitle":"","nTemplate":"N","endTime":"9:00 AM","notesText":""},{"attachments":[],"assignments":[],"color":"#3640ad","classLabelUnderline":"N","asgAttachments":[],"classLabelBold":"N","tab4Text":"","extraLesson":0,"unitNum":"","className":"English","titleSize":"10","type":"L","unitTitle":"","homeworkText":"","classId":6902928,"customStart":"","asmAttachments":[],"titleColor":"#FFFFFF","t6Template":"N","schoolStandards":[],"t4Template":"N","msTemplate":"N","unitId":0,"startTime":"","t5Template":"N","collaborateSubjectId":0,"classLabelItalic":"N","sTemplate":"N","tab5Text":"","hTemplate":"N","assessments":[],"customEnd":"","strategies":[],"myStandards":[],"collaborateType":0,"lessonLock":"N","lessonText":"","ssTemplate":"N","titleFont":"2","tab6Text":"","standards":[],"lTemplate":"N","teacherId":1349256,"lessonTitle":"","nTemplate":"N","endTime":"","notesText":""},{"attachments":[],"assignments":[],"color":"#65ad89","classLabelUnderline":"N","asgAttachments":[],"classLabelBold":"Y","tab4Text":"","extraLesson":0,"unitNum":"","className":"Maths","titleSize":"10","type":"L","unitTitle":"","homeworkText":"","classId":6915542,"customStart":"","asmAttachments":[],"titleColor":"#ffffff","t6Template":"N","schoolStandards":[],"t4Template":"N","msTemplate":"N","unitId":0,"startTime":"","t5Template":"N","collaborateSubjectId":0,"classLabelItalic":"N","sTemplate":"N","tab5Text":"","hTemplate":"N","assessments":[],"customEnd":"","strategies":[],"myStandards":[],"collaborateType":0,"lessonLock":"N","lessonText":"","ssTemplate":"N","titleFont":"2","tab6Text":"","standards":[],"lTemplate":"N","teacherId":1349256,"lessonTitle":"","nTemplate":"N","endTime":"","notesText":""}],"count":4},{"date":"03/24/2017","cD":"Week 2","dayOfWeek":"Friday","objects":[{"attachments":[],"assignments":[],"color":"#c7561e","classLabelUnderline":"N","asgAttachments":[],"classLabelBold":"Y","tab4Text":"","extraLesson":0,"unitNum":"","className":"maths","titleSize":"10","type":"L","unitTitle":"","homeworkText":"","classId":6915544,"customStart":"","asmAttachments":[],"titleColor":"#ffffff","t6Template":"N","schoolStandards":[],"t4Template":"N","msTemplate":"N","unitId":0,"startTime":"8:15 AM","t5Template":"N","collaborateSubjectId":0,"classLabelItalic":"N","sTemplate":"N","tab5Text":"","hTemplate":"N","assessments":[],"customEnd":"","strategies":[],"myStandards":[],"collaborateType":0,"lessonLock":"N","lessonText":"","ssTemplate":"N","titleFont":"2","tab6Text":"","standards":[],"lTemplate":"N","teacherId":1349256,"lessonTitle":"","nTemplate":"N","endTime":"9:00 AM","notesText":""},{"attachments":[],"assignments":[],"color":"#3640ad","classLabelUnderline":"N","asgAttachments":[],"classLabelBold":"N","tab4Text":"","extraLesson":0,"unitNum":"","className":"English","titleSize":"10","type":"L","unitTitle":"","homeworkText":"","classId":6902928,"customStart":"","asmAttachments":[],"titleColor":"#FFFFFF","t6Template":"N","schoolStandards":[],"t4Template":"N","msTemplate":"N","unitId":0,"startTime":"","t5Template":"N","collaborateSubjectId":0,"classLabelItalic":"N","sTemplate":"N","tab5Text":"","hTemplate":"N","assessments":[],"customEnd":"","strategies":[],"myStandards":[],"collaborateType":0,"lessonLock":"N","lessonText":"","ssTemplate":"N","titleFont":"2","tab6Text":"","standards":[],"lTemplate":"N","teacherId":1349256,"lessonTitle":"","nTemplate":"N","endTime":"","notesText":""},{"attachments":[],"assignments":[],"color":"#65ad89","classLabelUnderline":"N","asgAttachments":[],"classLabelBold":"Y","tab4Text":"","extraLesson":0,"unitNum":"","className":"Maths","titleSize":"10","type":"L","unitTitle":"","homeworkText":"","classId":6915542,"customStart":"","asmAttachments":[],"titleColor":"#ffffff","t6Template":"N","schoolStandards":[],"t4Template":"N","msTemplate":"N","unitId":0,"startTime":"","t5Template":"N","collaborateSubjectId":0,"classLabelItalic":"N","sTemplate":"N","tab5Text":"","hTemplate":"N","assessments":[],"customEnd":"","strategies":[],"myStandards":[],"collaborateType":0,"lessonLock":"N","lessonText":"","ssTemplate":"N","titleFont":"2","tab6Text":"","standards":[],"lTemplate":"N","teacherId":1349256,"lessonTitle":"","nTemplate":"N","endTime":"","notesText":""}],"count":5},{"date":"03/25/2017","cD":"Week 2","dayOfWeek":"Saturday","objects":[{"attachments":[],"assignments":[],"color":"#65ad89","classLabelUnderline":"N","asgAttachments":[],"classLabelBold":"Y","tab4Text":"","extraLesson":0,"unitNum":"","className":"Maths","titleSize":"10","type":"L","unitTitle":"","homeworkText":"","classId":6915542,"customStart":"","asmAttachments":[],"titleColor":"#ffffff","t6Template":"N","schoolStandards":[],"t4Template":"N","msTemplate":"N","unitId":0,"startTime":"","t5Template":"N","collaborateSubjectId":0,"classLabelItalic":"N","sTemplate":"N","tab5Text":"","hTemplate":"N","assessments":[],"customEnd":"","strategies":[],"myStandards":[],"collaborateType":0,"lessonLock":"N","lessonText":"","ssTemplate":"N","titleFont":"2","tab6Text":"","standards":[],"lTemplate":"N","teacherId":1349256,"lessonTitle":"","nTemplate":"N","endTime":"","notesText":""}],"count":-1},{"date":"03/26/2017","cD":"Week 1","dayOfWeek":"Sunday","objects":[{"attachments":[],"assignments":[],"color":"#c7561e","classLabelUnderline":"N","asgAttachments":[],"classLabelBold":"Y","tab4Text":"","extraLesson":0,"unitNum":"","className":"maths","titleSize":"10","type":"L","unitTitle":"","homeworkText":"","classId":6915544,"customStart":"","asmAttachments":[],"titleColor":"#ffffff","t6Template":"N","schoolStandards":[],"t4Template":"N","msTemplate":"N","unitId":0,"startTime":"7:45 AM","t5Template":"N","collaborateSubjectId":0,"classLabelItalic":"N","sTemplate":"N","tab5Text":"","hTemplate":"N","assessments":[],"customEnd":"","strategies":[],"myStandards":[],"collaborateType":0,"lessonLock":"N","lessonText":"","ssTemplate":"N","titleFont":"2","tab6Text":"","standards":[],"lTemplate":"N","teacherId":1349256,"lessonTitle":"","nTemplate":"N","endTime":"9:00 AM","notesText":""},{"attachments":[],"assignments":[],"color":"#65ad89","classLabelUnderline":"N","asgAttachments":[],"classLabelBold":"Y","tab4Text":"","extraLesson":0,"unitNum":"","className":"Maths","titleSize":"10","type":"L","unitTitle":"","homeworkText":"","classId":6915542,"customStart":"","asmAttachments":[],"titleColor":"#ffffff","t6Template":"N","schoolStandards":[],"t4Template":"N","msTemplate":"N","unitId":0,"startTime":"9:00 AM","t5Template":"N","collaborateSubjectId":0,"classLabelItalic":"N","sTemplate":"N","tab5Text":"","hTemplate":"N","assessments":[],"customEnd":"","strategies":[],"myStandards":[],"collaborateType":0,"lessonLock":"N","lessonText":"","ssTemplate":"N","titleFont":"2","tab6Text":"","standards":[],"lTemplate":"N","teacherId":1349256,"lessonTitle":"","nTemplate":"N","endTime":"10:00 AM","notesText":""}],"count":-1},{"date":"03/27/2017","cD":"Week 1","dayOfWeek":"Monday","objects":[{"attachments":[],"assignments":[],"color":"#c7561e","classLabelUnderline":"N","asgAttachments":[],"classLabelBold":"Y","tab4Text":"","extraLesson":0,"unitNum":"","className":"maths","titleSize":"10","type":"L","unitTitle":"","homeworkText":"","classId":6915544,"customStart":"","asmAttachments":[],"titleColor":"#ffffff","t6Template":"N","schoolStandards":[],"t4Template":"N","msTemplate":"N","unitId":0,"startTime":"7:45 AM","t5Template":"N","collaborateSubjectId":0,"classLabelItalic":"N","sTemplate":"N","tab5Text":"","hTemplate":"N","assessments":[],"customEnd":"","strategies":[],"myStandards":[],"collaborateType":0,"lessonLock":"N","lessonText":"","ssTemplate":"N","titleFont":"2","tab6Text":"","standards":[],"lTemplate":"N","teacherId":1349256,"lessonTitle":"","nTemplate":"N","endTime":"9:00 AM","notesText":""},{"attachments":[],"assignments":[],"color":"#3640ad","classLabelUnderline":"N","asgAttachments":[],"classLabelBold":"N","tab4Text":"","extraLesson":0,"unitNum":"","className":"English","titleSize":"10","type":"L","unitTitle":"","homeworkText":"<p>home work<\/p>","classId":6902928,"customStart":"","asmAttachments":[],"titleColor":"#FFFFFF","t6Template":"N","schoolStandards":[],"t4Template":"N","msTemplate":"N","unitId":0,"startTime":"","t5Template":"N","collaborateSubjectId":0,"classLabelItalic":"N","sTemplate":"N","tab5Text":"","hTemplate":"N","assessments":[],"customEnd":"","strategies":[],"myStandards":[],"collaborateType":0,"lessonLock":"N","lessonText":"<p>lession..............<\/p>","ssTemplate":"N","titleFont":"2","tab6Text":"","standards":[],"lTemplate":"N","teacherId":1349256,"lessonTitle":"Lession No 1","nTemplate":"N","endTime":"","notesText":"<p>notes.....<\/p>"}],"count":6},{"date":"03/28/2017","cD":"Week 1","dayOfWeek":"Tuesday","objects":[{"attachments":[],"assignments":[],"color":"#c7561e","classLabelUnderline":"N","asgAttachments":[],"classLabelBold":"Y","tab4Text":"","extraLesson":0,"unitNum":"","className":"maths","titleSize":"10","type":"L","unitTitle":"","homeworkText":"","classId":6915544,"customStart":"","asmAttachments":[],"titleColor":"#ffffff","t6Template":"N","schoolStandards":[],"t4Template":"N","msTemplate":"N","unitId":0,"startTime":"7:45 AM","t5Template":"N","collaborateSubjectId":0,"classLabelItalic":"N","sTemplate":"N","tab5Text":"","hTemplate":"N","assessments":[],"customEnd":"","strategies":[],"myStandards":[],"collaborateType":0,"lessonLock":"N","lessonText":"","ssTemplate":"N","titleFont":"2","tab6Text":"","standards":[],"lTemplate":"N","teacherId":1349256,"lessonTitle":"","nTemplate":"N","endTime":"9:00 AM","notesText":""},{"attachments":[],"assignments":[],"color":"#65ad89","classLabelUnderline":"N","asgAttachments":[],"classLabelBold":"Y","tab4Text":"","extraLesson":0,"unitNum":"","className":"Maths","titleSize":"10","type":"L","unitTitle":"","homeworkText":"","classId":6915542,"customStart":"","asmAttachments":[],"titleColor":"#ffffff","t6Template":"N","schoolStandards":[],"t4Template":"N","msTemplate":"N","unitId":0,"startTime":"9:00 AM","t5Template":"N","collaborateSubjectId":0,"classLabelItalic":"N","sTemplate":"N","tab5Text":"","hTemplate":"N","assessments":[],"customEnd":"","strategies":[],"myStandards":[],"collaborateType":0,"lessonLock":"N","lessonText":"","ssTemplate":"N","titleFont":"2","tab6Text":"","standards":[],"lTemplate":"N","teacherId":1349256,"lessonTitle":"","nTemplate":"N","endTime":"10:00 AM","notesText":""},{"attachments":[],"assignments":[],"color":"#3640ad","classLabelUnderline":"N","asgAttachments":[],"classLabelBold":"N","tab4Text":"","extraLesson":0,"unitNum":"","className":"English","titleSize":"10","type":"L","unitTitle":"","homeworkText":"<p>home work<\/p>","classId":6902928,"customStart":"","asmAttachments":[],"titleColor":"#FFFFFF","t6Template":"N","schoolStandards":[],"t4Template":"N","msTemplate":"N","unitId":0,"startTime":"","t5Template":"N","collaborateSubjectId":0,"classLabelItalic":"N","sTemplate":"N","tab5Text":"","hTemplate":"N","assessments":[],"customEnd":"","strategies":[],"myStandards":[],"collaborateType":0,"lessonLock":"N","lessonText":"<p>lession..............<\/p>","ssTemplate":"N","titleFont":"2","tab6Text":"","standards":[],"lTemplate":"N","teacherId":1349256,"lessonTitle":"Lession No 1","nTemplate":"N","endTime":"","notesText":"<p>notes.....<\/p>"}],"count":7},{"date":"03/29/2017","cD":"Week 1","dayOfWeek":"Wednesday","objects":[{"attachments":[],"assignments":[],"color":"#c7561e","classLabelUnderline":"N","asgAttachments":[],"classLabelBold":"Y","tab4Text":"","extraLesson":0,"unitNum":"","className":"maths","titleSize":"10","type":"L","unitTitle":"","homeworkText":"","classId":6915544,"customStart":"","asmAttachments":[],"titleColor":"#ffffff","t6Template":"N","schoolStandards":[],"t4Template":"N","msTemplate":"N","unitId":0,"startTime":"7:45 AM","t5Template":"N","collaborateSubjectId":0,"classLabelItalic":"N","sTemplate":"N","tab5Text":"","hTemplate":"N","assessments":[],"customEnd":"","strategies":[],"myStandards":[],"collaborateType":0,"lessonLock":"N","lessonText":"","ssTemplate":"N","titleFont":"2","tab6Text":"","standards":[],"lTemplate":"N","teacherId":1349256,"lessonTitle":"","nTemplate":"N","endTime":"9:00 AM","notesText":""},{"attachments":[],"assignments":[],"color":"#65ad89","classLabelUnderline":"N","asgAttachments":[],"classLabelBold":"Y","tab4Text":"","extraLesson":0,"unitNum":"","className":"Maths","titleSize":"10","type":"L","unitTitle":"","homeworkText":"","classId":6915542,"customStart":"","asmAttachments":[],"titleColor":"#ffffff","t6Template":"N","schoolStandards":[],"t4Template":"N","msTemplate":"N","unitId":0,"startTime":"9:00 AM","t5Template":"N","collaborateSubjectId":0,"classLabelItalic":"N","sTemplate":"N","tab5Text":"","hTemplate":"N","assessments":[],"customEnd":"","strategies":[],"myStandards":[],"collaborateType":0,"lessonLock":"N","lessonText":"","ssTemplate":"N","titleFont":"2","tab6Text":"","standards":[],"lTemplate":"N","teacherId":1349256,"lessonTitle":"","nTemplate":"N","endTime":"10:00 AM","notesText":""},{"attachments":[],"assignments":[],"color":"#3640ad","classLabelUnderline":"N","asgAttachments":[],"classLabelBold":"N","tab4Text":"","extraLesson":0,"unitNum":"","className":"English","titleSize":"10","type":"L","unitTitle":"","homeworkText":"","classId":6902928,"customStart":"1:00 PM","asmAttachments":[],"titleColor":"#FFFFFF","t6Template":"N","schoolStandards":[],"t4Template":"N","msTemplate":"N","unitId":0,"startTime":"","t5Template":"N","collaborateSubjectId":0,"classLabelItalic":"N","sTemplate":"N","tab5Text":"","hTemplate":"N","assessments":[],"customEnd":"2:00 AM","strategies":[],"myStandards":[],"collaborateType":0,"lessonLock":"N","lessonText":"","ssTemplate":"N","titleFont":"2","tab6Text":"","standards":[{"dbId":559730,"id":"1","desc":"Foundations: observation and perception. The student develops and expands visual literacy skills using critical thinking, imagination, and the senses to observe and explore the world by learning about, understanding, and applying the elements of art, principles of design, and expressive qualities. The student uses what the student sees, knows, and has experienced as sources for examining, understanding, and creating artworks. The student is expected to:"},{"dbId":559731,"id":"1.A","desc":"gather information from subjects in the environment using the senses; and"},{"dbId":559732,"id":"1.B","desc":"identify the elements of art, including line, shape, color, texture, and form, and the principles of design, including repetition/pattern and balance, in the environment."}],"lTemplate":"N","teacherId":1349256,"lessonTitle":"Lession 2","nTemplate":"N","endTime":"","notesText":""}],"count":8},{"date":"03/30/2017","cD":"Week 1","dayOfWeek":"Thursday","objects":[{"attachments":[],"assignments":[],"color":"#c7561e","classLabelUnderline":"N","asgAttachments":[],"classLabelBold":"Y","tab4Text":"","extraLesson":0,"unitNum":"","className":"maths","titleSize":"10","type":"L","unitTitle":"","homeworkText":"","classId":6915544,"customStart":"","asmAttachments":[],"titleColor":"#ffffff","t6Template":"N","schoolStandards":[],"t4Template":"N","msTemplate":"N","unitId":0,"startTime":"7:45 AM","t5Template":"N","collaborateSubjectId":0,"classLabelItalic":"N","sTemplate":"N","tab5Text":"","hTemplate":"N","assessments":[],"customEnd":"","strategies":[],"myStandards":[],"collaborateType":0,"lessonLock":"N","lessonText":"","ssTemplate":"N","titleFont":"2","tab6Text":"","standards":[],"lTemplate":"N","teacherId":1349256,"lessonTitle":"","nTemplate":"N","endTime":"9:00 AM","notesText":""},{"attachments":[],"assignments":[],"color":"#65ad89","classLabelUnderline":"N","asgAttachments":[],"classLabelBold":"Y","tab4Text":"","extraLesson":0,"unitNum":"","className":"Maths","titleSize":"10","type":"L","unitTitle":"","homeworkText":"","classId":6915542,"customStart":"","asmAttachments":[],"titleColor":"#ffffff","t6Template":"N","schoolStandards":[],"t4Template":"N","msTemplate":"N","unitId":0,"startTime":"9:00 AM","t5Template":"N","collaborateSubjectId":0,"classLabelItalic":"N","sTemplate":"N","tab5Text":"","hTemplate":"N","assessments":[],"customEnd":"","strategies":[],"myStandards":[],"collaborateType":0,"lessonLock":"N","lessonText":"","ssTemplate":"N","titleFont":"2","tab6Text":"","standards":[],"lTemplate":"N","teacherId":1349256,"lessonTitle":"","nTemplate":"N","endTime":"10:00 AM","notesText":""},{"attachments":[],"assignments":[],"color":"#3640ad","classLabelUnderline":"N","asgAttachments":[],"classLabelBold":"N","tab4Text":"","extraLesson":0,"unitNum":"","className":"English","titleSize":"10","type":"L","unitTitle":"","homeworkText":"","classId":6902928,"customStart":"","asmAttachments":[],"titleColor":"#FFFFFF","t6Template":"N","schoolStandards":[],"t4Template":"N","msTemplate":"N","unitId":0,"startTime":"","t5Template":"N","collaborateSubjectId":0,"classLabelItalic":"N","sTemplate":"N","tab5Text":"","hTemplate":"N","assessments":[],"customEnd":"","strategies":[],"myStandards":[],"collaborateType":0,"lessonLock":"N","lessonText":"","ssTemplate":"N","titleFont":"2","tab6Text":"","standards":[],"lTemplate":"N","teacherId":1349256,"lessonTitle":"","nTemplate":"N","endTime":"","notesText":""}],"count":9},{"date":"03/31/2017","cD":"Week 1","dayOfWeek":"Friday","objects":[{"attachments":[],"assignments":[],"color":"#c7561e","classLabelUnderline":"N","asgAttachments":[],"classLabelBold":"Y","tab4Text":"","extraLesson":0,"unitNum":"","className":"maths","titleSize":"10","type":"L","unitTitle":"","homeworkText":"","classId":6915544,"customStart":"","asmAttachments":[],"titleColor":"#ffffff","t6Template":"N","schoolStandards":[],"t4Template":"N","msTemplate":"N","unitId":0,"startTime":"7:45 AM","t5Template":"N","collaborateSubjectId":0,"classLabelItalic":"N","sTemplate":"N","tab5Text":"","hTemplate":"N","assessments":[],"customEnd":"","strategies":[],"myStandards":[],"collaborateType":0,"lessonLock":"N","lessonText":"","ssTemplate":"N","titleFont":"2","tab6Text":"","standards":[],"lTemplate":"N","teacherId":1349256,"lessonTitle":"","nTemplate":"N","endTime":"9:00 AM","notesText":""},{"attachments":[],"assignments":[],"color":"#65ad89","classLabelUnderline":"N","asgAttachments":[],"classLabelBold":"Y","tab4Text":"","extraLesson":0,"unitNum":"","className":"Maths","titleSize":"10","type":"L","unitTitle":"","homeworkText":"","classId":6915542,"customStart":"","asmAttachments":[],"titleColor":"#ffffff","t6Template":"N","schoolStandards":[],"t4Template":"N","msTemplate":"N","unitId":0,"startTime":"9:00 AM","t5Template":"N","collaborateSubjectId":0,"classLabelItalic":"N","sTemplate":"N","tab5Text":"","hTemplate":"N","assessments":[],"customEnd":"","strategies":[],"myStandards":[],"collaborateType":0,"lessonLock":"N","lessonText":"","ssTemplate":"N","titleFont":"2","tab6Text":"","standards":[],"lTemplate":"N","teacherId":1349256,"lessonTitle":"","nTemplate":"N","endTime":"10:00 AM","notesText":""},{"attachments":[],"assignments":[],"color":"#3640ad","classLabelUnderline":"N","asgAttachments":[],"classLabelBold":"N","tab4Text":"","extraLesson":0,"unitNum":"","className":"English","titleSize":"10","type":"L","unitTitle":"","homeworkText":"","classId":6902928,"customStart":"","asmAttachments":[],"titleColor":"#FFFFFF","t6Template":"N","schoolStandards":[],"t4Template":"N","msTemplate":"N","unitId":0,"startTime":"","t5Template":"N","collaborateSubjectId":0,"classLabelItalic":"N","sTemplate":"N","tab5Text":"","hTemplate":"N","assessments":[],"customEnd":"","strategies":[],"myStandards":[],"collaborateType":0,"lessonLock":"N","lessonText":"","ssTemplate":"N","titleFont":"2","tab6Text":"","standards":[],"lTemplate":"N","teacherId":1349256,"lessonTitle":"","nTemplate":"N","endTime":"","notesText":""}],"count":10},{"date":"04/01/2017","cD":"Week 1","dayOfWeek":"Saturday","objects":[{"attachments":[],"assignments":[],"color":"#65ad89","classLabelUnderline":"N","asgAttachments":[],"classLabelBold":"Y","tab4Text":"","extraLesson":0,"unitNum":"","className":"Maths","titleSize":"10","type":"L","unitTitle":"","homeworkText":"","classId":6915542,"customStart":"","asmAttachments":[],"titleColor":"#ffffff","t6Template":"N","schoolStandards":[],"t4Template":"N","msTemplate":"N","unitId":0,"startTime":"9:00 AM","t5Template":"N","collaborateSubjectId":0,"classLabelItalic":"N","sTemplate":"N","tab5Text":"","hTemplate":"N","assessments":[],"customEnd":"","strategies":[],"myStandards":[],"collaborateType":0,"lessonLock":"N","lessonText":"","ssTemplate":"N","titleFont":"2","tab6Text":"","standards":[],"lTemplate":"N","teacherId":1349256,"lessonTitle":"","nTemplate":"N","endTime":"10:00 AM","notesText":""}],"count":0},{"date":"04/02/2017","cD":"Week 2","dayOfWeek":"Sunday","objects":[{"attachments":[],"assignments":[],"color":"#65ad89","classLabelUnderline":"N","asgAttachments":[],"classLabelBold":"Y","tab4Text":"","extraLesson":0,"unitNum":"","className":"Maths","titleSize":"10","type":"L","unitTitle":"","homeworkText":"","classId":6915542,"customStart":"","asmAttachments":[],"titleColor":"#ffffff","t6Template":"N","schoolStandards":[],"t4Template":"N","msTemplate":"N","unitId":0,"startTime":"","t5Template":"N","collaborateSubjectId":0,"classLabelItalic":"N","sTemplate":"N","tab5Text":"","hTemplate":"N","assessments":[],"customEnd":"","strategies":[],"myStandards":[],"collaborateType":0,"lessonLock":"N","lessonText":"","ssTemplate":"N","titleFont":"2","tab6Text":"","standards":[],"lTemplate":"N","teacherId":1349256,"lessonTitle":"","nTemplate":"N","endTime":"","notesText":""}],"count":0},{"date":"04/03/2017","cD":"Week 2","dayOfWeek":"Monday","objects":[{"attachments":[],"assignments":[],"color":"#65ad89","classLabelUnderline":"N","asgAttachments":[],"classLabelBold":"Y","tab4Text":"","extraLesson":0,"unitNum":"","className":"Maths","titleSize":"10","type":"L","unitTitle":"","homeworkText":"","classId":6915542,"customStart":"","asmAttachments":[],"titleColor":"#ffffff","t6Template":"N","schoolStandards":[],"t4Template":"N","msTemplate":"N","unitId":0,"startTime":"","t5Template":"N","collaborateSubjectId":0,"classLabelItalic":"N","sTemplate":"N","tab5Text":"","hTemplate":"N","assessments":[],"customEnd":"","strategies":[],"myStandards":[],"collaborateType":0,"lessonLock":"N","lessonText":"","ssTemplate":"N","titleFont":"2","tab6Text":"","standards":[],"lTemplate":"N","teacherId":1349256,"lessonTitle":"","nTemplate":"N","endTime":"","notesText":""}],"count":0},{"date":"04/04/2017","cD":"Week 2","dayOfWeek":"Tuesday","objects":[{"attachments":[],"assignments":[],"color":"#65ad89","classLabelUnderline":"N","asgAttachments":[],"classLabelBold":"Y","tab4Text":"","extraLesson":0,"unitNum":"","className":"Maths","titleSize":"10","type":"L","unitTitle":"","homeworkText":"","classId":6915542,"customStart":"","asmAttachments":[],"titleColor":"#ffffff","t6Template":"N","schoolStandards":[],"t4Template":"N","msTemplate":"N","unitId":0,"startTime":"","t5Template":"N","collaborateSubjectId":0,"classLabelItalic":"N","sTemplate":"N","tab5Text":"","hTemplate":"N","assessments":[],"customEnd":"","strategies":[],"myStandards":[],"collaborateType":0,"lessonLock":"N","lessonText":"","ssTemplate":"N","titleFont":"2","tab6Text":"","standards":[],"lTemplate":"N","teacherId":1349256,"lessonTitle":"","nTemplate":"N","endTime":"","notesText":""}],"count":0},{"date":"04/05/2017","cD":"Week 2","dayOfWeek":"Wednesday","objects":[{"attachments":[],"assignments":[],"color":"#65ad89","classLabelUnderline":"N","asgAttachments":[],"classLabelBold":"Y","tab4Text":"","extraLesson":0,"unitNum":"","className":"Maths","titleSize":"10","type":"L","unitTitle":"","homeworkText":"","classId":6915542,"customStart":"","asmAttachments":[],"titleColor":"#ffffff","t6Template":"N","schoolStandards":[],"t4Template":"N","msTemplate":"N","unitId":0,"startTime":"","t5Template":"N","collaborateSubjectId":0,"classLabelItalic":"N","sTemplate":"N","tab5Text":"","hTemplate":"N","assessments":[],"customEnd":"","strategies":[],"myStandards":[],"collaborateType":0,"lessonLock":"N","lessonText":"","ssTemplate":"N","titleFont":"2","tab6Text":"","standards":[],"lTemplate":"N","teacherId":1349256,"lessonTitle":"","nTemplate":"N","endTime":"","notesText":""}],"count":0},{"date":"04/06/2017","cD":"Week 2","dayOfWeek":"Thursday","objects":[{"attachments":[],"assignments":[],"color":"#65ad89","classLabelUnderline":"N","asgAttachments":[],"classLabelBold":"Y","tab4Text":"","extraLesson":0,"unitNum":"","className":"Maths","titleSize":"10","type":"L","unitTitle":"","homeworkText":"","classId":6915542,"customStart":"","asmAttachments":[],"titleColor":"#ffffff","t6Template":"N","schoolStandards":[],"t4Template":"N","msTemplate":"N","unitId":0,"startTime":"","t5Template":"N","collaborateSubjectId":0,"classLabelItalic":"N","sTemplate":"N","tab5Text":"","hTemplate":"N","assessments":[],"customEnd":"","strategies":[],"myStandards":[],"collaborateType":0,"lessonLock":"N","lessonText":"","ssTemplate":"N","titleFont":"2","tab6Text":"","standards":[],"lTemplate":"N","teacherId":1349256,"lessonTitle":"","nTemplate":"N","endTime":"","notesText":""}],"count":0},{"date":"04/07/2017","cD":"Week 2","dayOfWeek":"Friday","objects":[{"attachments":[],"assignments":[],"color":"#65ad89","classLabelUnderline":"N","asgAttachments":[],"classLabelBold":"Y","tab4Text":"","extraLesson":0,"unitNum":"","className":"Maths","titleSize":"10","type":"L","unitTitle":"","homeworkText":"","classId":6915542,"customStart":"","asmAttachments":[],"titleColor":"#ffffff","t6Template":"N","schoolStandards":[],"t4Template":"N","msTemplate":"N","unitId":0,"startTime":"","t5Template":"N","collaborateSubjectId":0,"classLabelItalic":"N","sTemplate":"N","tab5Text":"","hTemplate":"N","assessments":[],"customEnd":"","strategies":[],"myStandards":[],"collaborateType":0,"lessonLock":"N","lessonText":"","ssTemplate":"N","titleFont":"2","tab6Text":"","standards":[],"lTemplate":"N","teacherId":1349256,"lessonTitle":"","nTemplate":"N","endTime":"","notesText":""}],"count":0},{"date":"04/08/2017","cD":"Week 2","dayOfWeek":"Saturday","objects":[{"attachments":[],"assignments":[],"color":"#65ad89","classLabelUnderline":"N","asgAttachments":[],"classLabelBold":"Y","tab4Text":"","extraLesson":0,"unitNum":"","className":"Maths","titleSize":"10","type":"L","unitTitle":"","homeworkText":"","classId":6915542,"customStart":"","asmAttachments":[],"titleColor":"#ffffff","t6Template":"N","schoolStandards":[],"t4Template":"N","msTemplate":"N","unitId":0,"startTime":"","t5Template":"N","collaborateSubjectId":0,"classLabelItalic":"N","sTemplate":"N","tab5Text":"","hTemplate":"N","assessments":[],"customEnd":"","strategies":[],"myStandards":[],"collaborateType":0,"lessonLock":"N","lessonText":"","ssTemplate":"N","titleFont":"2","tab6Text":"","standards":[],"lTemplate":"N","teacherId":1349256,"lessonTitle":"","nTemplate":"N","endTime":"","notesText":""}],"count":0}],"events":[]}';
});
