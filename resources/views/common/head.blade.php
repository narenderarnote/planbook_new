
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="teacher, plan, planbook, plan book, planner, lesson planner, lesson planner software, lesson planning software, lesson planning, lesson plan software, online lesson planner, online lesson planning, teacher lesson planning, lesson planner, teacher planner, lesson plans">
    <meta name="description" content="Planbook.com - The easiest way to create and manage your lessons online, developed by teachers for teachers.">
    <meta name="apple-itunes-app" content="app-id=671763634">
    <meta name="google-play-app" content="app-id=com.planbook">
    <title>Planbook.com - @yield('title', '')</title>
   
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css" />
    
    @stack('before-main-css')
    <link rel="stylesheet" href="/css/custom-style.css" type="text/css" />
    <link rel="stylesheet" href="/css/responsive.css" type="text/css" />
    @stack('style')

    <script type="text/javascript">
            
        var APP_URL = {!! json_encode(url('/')) !!};
        
    </script>

</head>