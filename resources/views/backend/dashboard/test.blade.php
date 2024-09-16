<html>
<head><title>Statistics Widgets | Gradient Able Dashboard Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
          content="Gradient Able is trending dashboard template made using Bootstrap 5 design framework. Gradient Able is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies.">
    <meta name="keywords"
          content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard">
    <meta name="author" content="codedthemes">

    <link rel="icon" href="../assets/images/favicon.svg" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/fonts/phosphor/duotone/style.css">
    <link rel="stylesheet" href="../assets/fonts/tabler-icons.min.css">
    <link rel="stylesheet" href="../assets/fonts/feather.css">
    <link rel="stylesheet" href="../assets/fonts/fontawesome.css">
    <link rel="stylesheet" href="../assets/fonts/material.css">
    <link rel="stylesheet" href="../assets/css/style.css" id="main-style-link">
    <link rel="stylesheet" href="../assets/css/style-preset.css">

    <link rel="stylesheet" href="{{ url('backend/css/style.css') }}" id="main-style-link">
    <link rel="stylesheet" href="{{ url('backend/css/style-preset.css') }}">

    <script src="https://kit.fontawesome.com/7b81d78297.js" crossorigin="anonymous"></script>

    <!--Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/phosphor-icons@1.4.2/src/css/icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/feather-icon@0.1.0/css/feather.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/material-icons@1.13.12/iconfont/material-icons.min.css">

</head>


<body data-pc-header="header-1" data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true"
      data-pc-direction="ltr" data-pc-theme="light">


<div class="loader-bg">
    <div class="loader-track">
        <div class="loader-fill"></div>
    </div>
</div>

<nav class="pc-sidebar pc-trigger">
    <div class="navbar-wrapper" style="display: block;">
        <div class="m-header"><a href="../dashboard/index.html" class="b-brand text-primary"> <img
                    src="../assets/images/logo-dark.svg" alt="logo image" class="logo-lg"> <span
                    class="badge bg-primary rounded-pill ms-1 theme-version">v2.1.0</span></a></div>
        <div class="navbar-content pc-trigger active simplebar-scrollable-y" data-simplebar="init">
            <div class="simplebar-wrapper" style="margin: -10px 0px;">
                <div class="simplebar-height-auto-observer-wrapper">
                    <div class="simplebar-height-auto-observer"></div>
                </div>
                <div class="simplebar-mask">
                    <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                        <div class="simplebar-content-wrapper" tabindex="0" role="region"
                             aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">
                            <div class="simplebar-content" style="padding: 10px 0px;">
                                <ul class="pc-navbar" style="display: block;">
                                    <li class="pc-item pc-caption"><label>Navigation</label></li>
                                    <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link"><span
                                                class="pc-micon"><i class="ph ph-gauge"></i></span><span
                                                class="pc-mtext">Dashboard</span><span class="pc-arrow"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-chevron-right"><polyline
                                                        points="9 18 15 12 9 6"></polyline></svg></span></a>
                                        <ul class="pc-submenu" style="display: none;">
                                            <li class="pc-item"><a class="pc-link"
                                                                   href="../dashboard/index.html">Sales</a></li>
                                            <li class="pc-item"><a class="pc-link"
                                                                   href="../dashboard/index-analytics.html">Analytics</a>
                                            </li>
                                            <li class="pc-item"><a class="pc-link"
                                                                   href="../dashboard/index-affiliate.html">Affiliate</a>
                                            </li>
                                            <li class="pc-item"><a class="pc-link" href="../dashboard/finance.html">Finance</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link"><span
                                                class="pc-micon"><i class="ph ph-layout"></i></span><span
                                                class="pc-mtext">Layouts</span><span class="pc-arrow"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-chevron-right"><polyline
                                                        points="9 18 15 12 9 6"></polyline></svg></span></a>
                                        <ul class="pc-submenu" style="display: none;">
                                            <li class="pc-item"><a class="pc-link" href="../demo/layout-compact.html">Compact</a>
                                            </li>
                                            <li class="pc-item"><a class="pc-link"
                                                                   href="../demo/layout-horizontal.html">Horizontal</a>
                                            </li>
                                            <li class="pc-item"><a class="pc-link"
                                                                   href="../demo/layout-tab.html">Tab</a></li>
                                            <li class="pc-item"><a class="pc-link" href="../demo/layout-vertical.html">Vertical</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="pc-item pc-caption"><label>Widget</label> <i class="ph ph-chart-pie"></i>
                                    </li>
                                    <li class="pc-item active"><a href="../widget/w_statistics.html"
                                                                  class="pc-link"><span class="pc-micon"><i
                                                    class="ph ph-projector-screen-chart"></i> </span><span
                                                class="pc-mtext">Statistics</span></a></li>
                                    <li class="pc-item"><a href="../widget/w_user.html" class="pc-link"><span
                                                class="pc-micon"><i class="ph ph-identification-card"></i> </span><span
                                                class="pc-mtext">User</span></a></li>
                                    <li class="pc-item"><a href="../widget/w_data.html" class="pc-link"><span
                                                class="pc-micon"><i class="ph ph-database"></i> </span><span
                                                class="pc-mtext">Data</span></a></li>
                                    <li class="pc-item"><a href="../widget/w_chart.html" class="pc-link"><span
                                                class="pc-micon"><i class="ph ph-chart-pie"></i> </span><span
                                                class="pc-mtext">Chart</span></a></li>
                                    <li class="pc-item pc-caption"><label>Admin Panel</label> <i
                                            class="ph ph-books"></i></li>
                                    <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link"><span
                                                class="pc-micon"><i class="ph ph-books"></i> </span><span
                                                class="pc-mtext">Online Courses</span> <span class="pc-arrow"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-chevron-right"><polyline
                                                        points="9 18 15 12 9 6"></polyline></svg></span></a>
                                        <ul class="pc-submenu" style="display: none;">
                                            <li class="pc-item"><a class="pc-link"
                                                                   href="../admins/course-dashboard.html">Dashboard</a>
                                            </li>
                                            <li class="pc-item pc-hasmenu"><a class="pc-link" href="#!">Teacher<span
                                                        class="pc-arrow"><svg xmlns="http://www.w3.org/2000/svg"
                                                                              width="24" height="24" viewBox="0 0 24 24"
                                                                              fill="none" stroke="currentColor"
                                                                              stroke-width="2" stroke-linecap="round"
                                                                              stroke-linejoin="round"
                                                                              class="feather feather-chevron-right"><polyline
                                                                points="9 18 15 12 9 6"></polyline></svg></span></a>
                                                <ul class="pc-submenu" style="display: none;">
                                                    <li class="pc-item"><a class="pc-link"
                                                                           href="../admins/course-teacher-list.html">List</a>
                                                    </li>
                                                    <li class="pc-item"><a class="pc-link"
                                                                           href="../admins/course-teacher-apply.html">Apply</a>
                                                    </li>
                                                    <li class="pc-item"><a class="pc-link"
                                                                           href="../admins/course-teacher-add.html">Add</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="pc-item pc-hasmenu"><a class="pc-link" href="#!">Student<span
                                                        class="pc-arrow"><svg xmlns="http://www.w3.org/2000/svg"
                                                                              width="24" height="24" viewBox="0 0 24 24"
                                                                              fill="none" stroke="currentColor"
                                                                              stroke-width="2" stroke-linecap="round"
                                                                              stroke-linejoin="round"
                                                                              class="feather feather-chevron-right"><polyline
                                                                points="9 18 15 12 9 6"></polyline></svg></span></a>
                                                <ul class="pc-submenu" style="display: none;">
                                                    <li class="pc-item"><a class="pc-link"
                                                                           href="../admins/course-student-list.html">list</a>
                                                    </li>
                                                    <li class="pc-item"><a class="pc-link"
                                                                           href="../admins/course-student-apply.html">Apply</a>
                                                    </li>
                                                    <li class="pc-item"><a class="pc-link"
                                                                           href="../admins/course-student-add.html">Add</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="pc-item pc-hasmenu"><a class="pc-link" href="#!">Courses<span
                                                        class="pc-arrow"><svg xmlns="http://www.w3.org/2000/svg"
                                                                              width="24" height="24" viewBox="0 0 24 24"
                                                                              fill="none" stroke="currentColor"
                                                                              stroke-width="2" stroke-linecap="round"
                                                                              stroke-linejoin="round"
                                                                              class="feather feather-chevron-right"><polyline
                                                                points="9 18 15 12 9 6"></polyline></svg></span></a>
                                                <ul class="pc-submenu" style="display: none;">
                                                    <li class="pc-item"><a class="pc-link"
                                                                           href="../admins/course-course-view.html">View</a>
                                                    </li>
                                                    <li class="pc-item"><a class="pc-link"
                                                                           href="../admins/course-course-add.html">Add</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="pc-item"><a class="pc-link" href="../admins/course-pricing.html">Pricing</a>
                                            </li>
                                            <li class="pc-item"><a class="pc-link" href="../admins/course-site.html">Site</a>
                                            </li>
                                            <li class="pc-item pc-hasmenu"><a class="pc-link" href="#!">Setting<span
                                                        class="pc-arrow"><svg xmlns="http://www.w3.org/2000/svg"
                                                                              width="24" height="24" viewBox="0 0 24 24"
                                                                              fill="none" stroke="currentColor"
                                                                              stroke-width="2" stroke-linecap="round"
                                                                              stroke-linejoin="round"
                                                                              class="feather feather-chevron-right"><polyline
                                                                points="9 18 15 12 9 6"></polyline></svg></span></a>
                                                <ul class="pc-submenu" style="display: none;">
                                                    <li class="pc-item"><a class="pc-link"
                                                                           href="../admins/course-setting-payment.html">Payment</a>
                                                    </li>
                                                    <li class="pc-item"><a class="pc-link"
                                                                           href="../admins/course-setting-pricing.html">Pricing</a>
                                                    </li>
                                                    <li class="pc-item"><a class="pc-link"
                                                                           href="../admins/course-setting-notifications.html">Notifications</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link"><span
                                                class="pc-micon"><i class="ph ph-identification-badge"></i> </span><span
                                                class="pc-mtext">Membership</span> <span class="pc-arrow"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-chevron-right"><polyline
                                                        points="9 18 15 12 9 6"></polyline></svg></span></a>
                                        <ul class="pc-submenu" style="display: none;">
                                            <li class="pc-item"><a class="pc-link"
                                                                   href="../admins/membership-dashboard.html">Dashboard</a>
                                            </li>
                                            <li class="pc-item"><a class="pc-link"
                                                                   href="../admins/membership-list.html">List</a></li>
                                            <li class="pc-item"><a class="pc-link"
                                                                   href="../admins/membership-pricing.html">Pricing</a>
                                            </li>
                                            <li class="pc-item"><a class="pc-link"
                                                                   href="../admins/membership-setting.html">Setting</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link"><span
                                                class="pc-micon"><i class="ph ph-lifebuoy"></i></span><span
                                                class="pc-mtext">Helpdesk</span><span class="pc-arrow"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-chevron-right"><polyline
                                                        points="9 18 15 12 9 6"></polyline></svg></span></a>
                                        <ul class="pc-submenu" style="display: none;">
                                            <li class="pc-item"><a class="pc-link"
                                                                   href="../admins/helpdesk-dashboard.html">Dashboard</a>
                                            </li>
                                            <li class="pc-item pc-hasmenu"><a class="pc-link" href="#!">Ticket<span
                                                        class="pc-arrow"><svg xmlns="http://www.w3.org/2000/svg"
                                                                              width="24" height="24" viewBox="0 0 24 24"
                                                                              fill="none" stroke="currentColor"
                                                                              stroke-width="2" stroke-linecap="round"
                                                                              stroke-linejoin="round"
                                                                              class="feather feather-chevron-right"><polyline
                                                                points="9 18 15 12 9 6"></polyline></svg></span></a>
                                                <ul class="pc-submenu" style="display: none;">
                                                    <li class="pc-item"><a class="pc-link"
                                                                           href="../admins/helpdesk-create-ticket.html">Create</a>
                                                    </li>
                                                    <li class="pc-item"><a class="pc-link"
                                                                           href="../admins/helpdesk-ticket.html">List</a>
                                                    </li>
                                                    <li class="pc-item"><a class="pc-link"
                                                                           href="../admins/helpdesk-ticket-details.html">Details</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="pc-item"><a class="pc-link"
                                                                   href="../admins/helpdesk-customer.html">Customer</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link"><span
                                                class="pc-micon"><i class="ph ph-scroll"></i></span><span
                                                class="pc-mtext">invoice</span><span class="pc-arrow"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-chevron-right"><polyline
                                                        points="9 18 15 12 9 6"></polyline></svg></span></a>
                                        <ul class="pc-submenu" style="display: none;">
                                            <li class="pc-item"><a class="pc-link"
                                                                   href="../admins/invoice-dashboard.html">Dashboard</a>
                                            </li>
                                            <li class="pc-item"><a class="pc-link" href="../admins/invoice-create.html">Create</a>
                                            </li>
                                            <li class="pc-item"><a class="pc-link" href="../admins/invoice-view.html">Details</a>
                                            </li>
                                            <li class="pc-item"><a class="pc-link" href="../admins/invoice-list.html">List</a>
                                            </li>
                                            <li class="pc-item"><a class="pc-link" href="../admins/invoice-edit.html">Edit</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="pc-item pc-caption"><label>UI Components</label> <i
                                            class="ph ph-compass-tool"></i></li>
                                    <li class="pc-item"><a href="../elements/bc_alert.html" class="pc-link"
                                                           target="_blank"><span class="pc-micon"><i
                                                    class="ph ph-compass-tool"></i></span><span class="pc-mtext">Components</span></a>
                                    </li>
                                    <li class="pc-item"><a href="../elements/animation.html" class="pc-link"><span
                                                class="pc-micon"><i class="ph ph-flower"></i> </span><span
                                                class="pc-mtext">Animation</span></a></li>
                                    <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link"><span
                                                class="pc-micon"><i class="ph ph-flower-lotus"></i></span><span
                                                class="pc-mtext">Icons</span><span class="pc-arrow"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-chevron-right"><polyline
                                                        points="9 18 15 12 9 6"></polyline></svg></span></a>
                                        <ul class="pc-submenu" style="display: none;">
                                            <li class="pc-item"><a class="pc-link" href="../elements/icon-feather.html">Feather</a>
                                            </li>
                                            <li class="pc-item"><a class="pc-link"
                                                                   href="../elements/icon-fontawesome.html">Font Awesome
                                                    5</a></li>
                                            <li class="pc-item"><a class="pc-link"
                                                                   href="../elements/icon-material.html">Material</a>
                                            </li>
                                            <li class="pc-item"><a class="pc-link" href="../elements/icon-tabler.html">Tabler</a>
                                            </li>
                                            <li class="pc-item"><a class="pc-link"
                                                                   href="../elements/icon-phosphor.html">Phosphor</a>
                                            </li>
                                            <li class="pc-item"><a class="pc-link" href="../elements/icon-custom.html">Custom</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="pc-item pc-caption"><label>Forms</label> <i class="ph ph-textbox"></i>
                                    </li>
                                    <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link"><span
                                                class="pc-micon"><i class="ph ph-textbox"></i> </span><span
                                                class="pc-mtext">Forms Elements</span><span class="pc-arrow"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-chevron-right"><polyline
                                                        points="9 18 15 12 9 6"></polyline></svg></span></a>
                                        <ul class="pc-submenu" style="display: none;">
                                            <li class="pc-item"><a class="pc-link" href="../forms/form_elements.html">Form
                                                    Basic</a></li>
                                            <li class="pc-item"><a class="pc-link" href="../forms/form_floating.html">Form
                                                    Floating</a></li>
                                            <li class="pc-item"><a class="pc-link" href="../forms/form2_basic.html">Form
                                                    Options</a></li>
                                            <li class="pc-item"><a class="pc-link"
                                                                   href="../forms/form2_input_group.html">Input
                                                    Groups</a></li>
                                            <li class="pc-item"><a class="pc-link" href="../forms/form2_checkbox.html">Checkbox</a>
                                            </li>
                                            <li class="pc-item"><a class="pc-link" href="../forms/form2_radio.html">Radio</a>
                                            </li>
                                            <li class="pc-item"><a class="pc-link" href="../forms/form2_switch.html">Switch</a>
                                            </li>
                                            <li class="pc-item"><a class="pc-link"
                                                                   href="../forms/form2_megaoption.html">Mega option</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link"><span
                                                class="pc-micon"><i class="ph ph-plug-charging"></i> </span><span
                                                class="pc-mtext">Forms Plugins</span><span class="pc-arrow"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-chevron-right"><polyline
                                                        points="9 18 15 12 9 6"></polyline></svg></span></a>
                                        <ul class="pc-submenu" style="display: none;">
                                            <li class="pc-item pc-hasmenu"><a class="pc-link" href="#">Date<span
                                                        class="pc-arrow"><svg xmlns="http://www.w3.org/2000/svg"
                                                                              width="24" height="24" viewBox="0 0 24 24"
                                                                              fill="none" stroke="currentColor"
                                                                              stroke-width="2" stroke-linecap="round"
                                                                              stroke-linejoin="round"
                                                                              class="feather feather-chevron-right"><polyline
                                                                points="9 18 15 12 9 6"></polyline></svg></span></a>
                                                <ul class="pc-submenu" style="display: none;">
                                                    <li class="pc-item"><a class="pc-link"
                                                                           href="../forms/form2_datepicker.html">Datepicker</a>
                                                    </li>
                                                    <li class="pc-item"><a class="pc-link"
                                                                           href="../forms/form2_daterangepicker.html">Date
                                                            Range Picker</a></li>
                                                    <li class="pc-item"><a class="pc-link"
                                                                           href="../forms/form2_timepicker.html">Timepicker</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="pc-item pc-hasmenu"><a class="pc-link" href="#">Select<span
                                                        class="pc-arrow"><svg xmlns="http://www.w3.org/2000/svg"
                                                                              width="24" height="24" viewBox="0 0 24 24"
                                                                              fill="none" stroke="currentColor"
                                                                              stroke-width="2" stroke-linecap="round"
                                                                              stroke-linejoin="round"
                                                                              class="feather feather-chevron-right"><polyline
                                                                points="9 18 15 12 9 6"></polyline></svg></span></a>
                                                <ul class="pc-submenu" style="display: none;">
                                                    <li class="pc-item"><a class="pc-link"
                                                                           href="../forms/form2_choices.html">Choices
                                                            js</a></li>
                                                </ul>
                                            </li>
                                            <li class="pc-item"><a class="pc-link" href="../forms/form2_rating.html">Rating</a>
                                            </li>
                                            <li class="pc-item"><a class="pc-link" href="../forms/form2_recaptcha.html">Google
                                                    reCaptcha</a></li>
                                            <li class="pc-item"><a class="pc-link" href="../forms/form2_inputmask.html">Input
                                                    Masks</a></li>
                                            <li class="pc-item"><a class="pc-link" href="../forms/form2_clipboard.html">Clipboard</a>
                                            </li>
                                            <li class="pc-item"><a class="pc-link"
                                                                   href="../forms/form2_nouislider.html">Nouislider</a>
                                            </li>
                                            <li class="pc-item"><a class="pc-link" href="../forms/form2_switchjs.html">Bootstrap
                                                    Switch</a></li>
                                            <li class="pc-item"><a class="pc-link" href="../forms/form2_typeahead.html">Typeahead</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link"><span
                                                class="pc-micon"><i class="ph ph-pen-nib"></i> </span><span
                                                class="pc-mtext">Text Editors</span><span class="pc-arrow"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-chevron-right"><polyline
                                                        points="9 18 15 12 9 6"></polyline></svg></span></a>
                                        <ul class="pc-submenu" style="display: none;">
                                            <li class="pc-item"><a class="pc-link" href="../forms/form2_tinymce.html">Tinymce</a>
                                            </li>
                                            <li class="pc-item"><a class="pc-link" href="../forms/form2_quill.html">Quill</a>
                                            </li>
                                            <li class="pc-item pc-hasmenu"><a class="pc-link" href="#">CK editor<span
                                                        class="pc-arrow"><svg xmlns="http://www.w3.org/2000/svg"
                                                                              width="24" height="24" viewBox="0 0 24 24"
                                                                              fill="none" stroke="currentColor"
                                                                              stroke-width="2" stroke-linecap="round"
                                                                              stroke-linejoin="round"
                                                                              class="feather feather-chevron-right"><polyline
                                                                points="9 18 15 12 9 6"></polyline></svg></span></a>
                                                <ul class="pc-submenu" style="display: none;">
                                                    <li class="pc-item"><a class="pc-link"
                                                                           href="../forms/editor-classic.html">classic</a>
                                                    </li>
                                                    <li class="pc-item"><a class="pc-link"
                                                                           href="../forms/editor-document.html">Document</a>
                                                    </li>
                                                    <li class="pc-item"><a class="pc-link"
                                                                           href="../forms/editor-inline.html">Inline</a>
                                                    </li>
                                                    <li class="pc-item"><a class="pc-link"
                                                                           href="../forms/editor-balloon.html">Balloon</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="pc-item"><a class="pc-link" href="../forms/form2_markdown.html">Markdown</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link"><span
                                                class="pc-micon"><i class="ph ph-windows-logo"></i> </span><span
                                                class="pc-mtext">Form Layouts</span><span class="pc-arrow"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-chevron-right"><polyline
                                                        points="9 18 15 12 9 6"></polyline></svg></span></a>
                                        <ul class="pc-submenu" style="display: none;">
                                            <li class="pc-item"><a class="pc-link"
                                                                   href="../forms/form2_lay-default.html">Layouts</a>
                                            </li>
                                            <li class="pc-item"><a class="pc-link"
                                                                   href="../forms/form2_lay-multicolumn.html">Multicolumn</a>
                                            </li>
                                            <li class="pc-item"><a class="pc-link"
                                                                   href="../forms/form2_lay-actionbars.html">Actionbars</a>
                                            </li>
                                            <li class="pc-item"><a class="pc-link"
                                                                   href="../forms/form2_lay-stickyactionbars.html">Sticky
                                                    Action bars</a></li>
                                        </ul>
                                    </li>
                                    <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link"><span
                                                class="pc-micon"><i class="ph ph-cloud-arrow-up"></i> </span><span
                                                class="pc-mtext">File upload</span><span class="pc-arrow"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-chevron-right"><polyline
                                                        points="9 18 15 12 9 6"></polyline></svg></span></a>
                                        <ul class="pc-submenu" style="display: none;">
                                            <li class="pc-item"><a class="pc-link" href="../forms/file-upload.html">Dropzone</a>
                                            </li>
                                            <li class="pc-item"><a class="pc-link" href="../forms/form2_flu-uppy.html">Uppy</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="pc-item"><a href="../forms/form2_wizard.html" class="pc-link"><span
                                                class="pc-micon"><i class="ph ph-tabs"></i> </span><span
                                                class="pc-mtext">wizard</span></a></li>
                                    <li class="pc-item"><a href="../forms/form-validation.html" class="pc-link"><span
                                                class="pc-micon"><i class="ph ph-password"></i> </span><span
                                                class="pc-mtext">Form Validation</span></a></li>
                                    <li class="pc-item"><a href="../forms/image_crop.html" class="pc-link"><span
                                                class="pc-micon"><i class="ph ph-crop"></i> </span><span
                                                class="pc-mtext">Image cropper</span></a></li>
                                    <li class="pc-item pc-caption"><label>table</label> <i class="ph ph-table"></i></li>
                                    <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link"><span
                                                class="pc-micon"><i class="ph ph-table"></i> </span><span
                                                class="pc-mtext">Bootstrap Table</span><span class="pc-arrow"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-chevron-right"><polyline
                                                        points="9 18 15 12 9 6"></polyline></svg></span></a>
                                        <ul class="pc-submenu" style="display: none;">
                                            <li class="pc-item"><a class="pc-link" href="../table/tbl_bootstrap.html">Basic
                                                    table</a></li>
                                            <li class="pc-item"><a class="pc-link" href="../table/tbl_sizing.html">Sizing
                                                    table</a></li>
                                            <li class="pc-item"><a class="pc-link" href="../table/tbl_border.html">Border
                                                    table</a></li>
                                            <li class="pc-item"><a class="pc-link" href="../table/tbl_styling.html">Styling
                                                    table</a></li>
                                        </ul>
                                    </li>
                                    <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link"><span
                                                class="pc-micon"><i class="ph ph-grid-nine"></i> </span><span
                                                class="pc-mtext">Vanilla Table</span><span class="pc-arrow"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-chevron-right"><polyline
                                                        points="9 18 15 12 9 6"></polyline></svg></span></a>
                                        <ul class="pc-submenu" style="display: none;">
                                            <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-simple.html">Basic
                                                    initialization</a></li>
                                            <li class="pc-item"><a class="pc-link"
                                                                   href="../table/tbl_dt-dynamic-import.html">Dynamic
                                                    Import</a></li>
                                            <li class="pc-item"><a class="pc-link"
                                                                   href="../table/tbl_dt-render-column-cells.html">Render
                                                    Column Cells</a></li>
                                            <li class="pc-item"><a class="pc-link"
                                                                   href="../table/tbl_dt-column-manipulation.html">Column
                                                    Manipulation</a></li>
                                            <li class="pc-item"><a class="pc-link"
                                                                   href="../table/tbl_dt-datetime-sorting.html">Datetime
                                                    Sorting</a></li>
                                            <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-methods.html">Methods</a>
                                            </li>
                                            <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-add-rows.html">Add
                                                    Rows</a></li>
                                            <li class="pc-item"><a class="pc-link"
                                                                   href="../table/tbl_dt-fetch-api.html">Fetch API</a>
                                            </li>
                                            <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-filters.html">Filters</a>
                                            </li>
                                            <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-export.html">Export</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link"><span
                                                class="pc-micon"><i class="ph ph-text-columns"></i> </span><span
                                                class="pc-mtext">Data table</span><span class="pc-arrow"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-chevron-right"><polyline
                                                        points="9 18 15 12 9 6"></polyline></svg></span></a>
                                        <ul class="pc-submenu" style="display: none;">
                                            <li class="pc-item"><a class="pc-link" href="../table/dt_advance.html">Advance
                                                    initialization</a></li>
                                            <li class="pc-item"><a class="pc-link" href="../table/dt_styling.html">Styling</a>
                                            </li>
                                            <li class="pc-item"><a class="pc-link" href="../table/dt_api.html">API</a>
                                            </li>
                                            <li class="pc-item"><a class="pc-link" href="../table/dt_plugin.html">Plug-in</a>
                                            </li>
                                            <li class="pc-item"><a class="pc-link" href="../table/dt_sources.html">Data
                                                    sources</a></li>
                                        </ul>
                                    </li>
                                    <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link"><span
                                                class="pc-micon"><i class="ph ph-wall"></i> </span><span
                                                class="pc-mtext">DT extensions</span><span class="pc-arrow"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-chevron-right"><polyline
                                                        points="9 18 15 12 9 6"></polyline></svg></span></a>
                                        <ul class="pc-submenu" style="display: none;">
                                            <li class="pc-item"><a class="pc-link" href="../table/dt_ext_autofill.html">Autofill</a>
                                            </li>
                                            <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link">Button<span
                                                        class="pc-arrow"><svg xmlns="http://www.w3.org/2000/svg"
                                                                              width="24" height="24" viewBox="0 0 24 24"
                                                                              fill="none" stroke="currentColor"
                                                                              stroke-width="2" stroke-linecap="round"
                                                                              stroke-linejoin="round"
                                                                              class="feather feather-chevron-right"><polyline
                                                                points="9 18 15 12 9 6"></polyline></svg></span></a>
                                                <ul class="pc-submenu" style="display: none;">
                                                    <li class="pc-item"><a class="pc-link"
                                                                           href="../table/dt_ext_basic_buttons.html">Basic
                                                            button</a></li>
                                                    <li class="pc-item"><a class="pc-link"
                                                                           href="../table/dt_ext_export_buttons.html">Data
                                                            export</a></li>
                                                </ul>
                                            </li>
                                            <li class="pc-item"><a class="pc-link"
                                                                   href="../table/dt_ext_col_reorder.html">Col
                                                    reorder</a></li>
                                            <li class="pc-item"><a class="pc-link"
                                                                   href="../table/dt_ext_fixed_columns.html">Fixed
                                                    columns</a></li>
                                            <li class="pc-item"><a class="pc-link"
                                                                   href="../table/dt_ext_fixed_header.html">Fixed
                                                    header</a></li>
                                            <li class="pc-item"><a class="pc-link"
                                                                   href="../table/dt_ext_key_table.html">Key table</a>
                                            </li>
                                            <li class="pc-item"><a class="pc-link"
                                                                   href="../table/dt_ext_responsive.html">Responsive</a>
                                            </li>
                                            <li class="pc-item"><a class="pc-link"
                                                                   href="../table/dt_ext_row_reorder.html">Row
                                                    reorder</a></li>
                                            <li class="pc-item"><a class="pc-link" href="../table/dt_ext_scroller.html">Scroller</a>
                                            </li>
                                            <li class="pc-item"><a class="pc-link" href="../table/dt_ext_select.html">Select
                                                    table</a></li>
                                        </ul>
                                    </li>
                                    <li class="pc-item pc-caption"><label>Charts &amp; Maps</label> <i
                                            class="ph ph-chart-pie-slice"></i></li>
                                    <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link"><span
                                                class="pc-micon"><i class="ph ph-chart-donut"></i> </span><span
                                                class="pc-mtext">Charts</span><span class="pc-arrow"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-chevron-right"><polyline
                                                        points="9 18 15 12 9 6"></polyline></svg></span></a>
                                        <ul class="pc-submenu" style="display: none;">
                                            <li class="pc-item"><a class="pc-link" href="../chart/chart-apex.html">Apex
                                                    Chart</a></li>
                                            <li class="pc-item"><a class="pc-link" href="../chart/chart-peity.html">Peity
                                                    Chart</a></li>
                                        </ul>
                                    </li>
                                    <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link"><span
                                                class="pc-micon"><i class="ph ph-map-trifold"></i> </span><span
                                                class="pc-mtext">Maps</span><span class="pc-arrow"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-chevron-right"><polyline
                                                        points="9 18 15 12 9 6"></polyline></svg></span></a>
                                        <ul class="pc-submenu" style="display: none;">
                                            <li class="pc-item"><a class="pc-link" href="../chart/map-vector.html">Vector
                                                    Map</a></li>
                                            <li class="pc-item"><a class="pc-link"
                                                                   href="../chart/map-gmap.html">Gmaps</a></li>
                                        </ul>
                                    </li>
                                    <li class="pc-item pc-caption"><label>Application</label> <i
                                            class="ph ph-buildings"></i></li>
                                    <li class="pc-item"><a href="../application/calendar.html" class="pc-link"><span
                                                class="pc-micon"><i class="ph ph-calendar-blank"></i> </span><span
                                                class="pc-mtext">Calendar</span></a></li>
                                    <li class="pc-item"><a href="../application/chat.html" class="pc-link"><span
                                                class="pc-micon"><i class="ph ph-chats-circle"></i> </span><span
                                                class="pc-mtext">Chat</span></a></li>
                                    <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link"><span
                                                class="pc-micon"><i class="ph ph-image"></i> </span><span
                                                class="pc-mtext">Gallery</span><span class="pc-arrow"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-chevron-right"><polyline
                                                        points="9 18 15 12 9 6"></polyline></svg></span></a>
                                        <ul class="pc-submenu" style="display: none;">
                                            <li class="pc-item"><a class="pc-link"
                                                                   href="../application/gallery-grid.html">Grid</a></li>
                                            <li class="pc-item"><a class="pc-link"
                                                                   href="../application/gallery-masonry.html">Masonry</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link"><span
                                                class="pc-micon"><i class="ph ph-shopping-cart"></i> </span><span
                                                class="pc-mtext">E-commerce</span><span class="pc-arrow"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-chevron-right"><polyline
                                                        points="9 18 15 12 9 6"></polyline></svg></span></a>
                                        <ul class="pc-submenu" style="display: none;">
                                            <li class="pc-item"><a class="pc-link"
                                                                   href="../application/ecom_product.html">Product</a>
                                            </li>
                                            <li class="pc-item"><a class="pc-link"
                                                                   href="../application/ecom_product-details.html">Product
                                                    details</a></li>
                                            <li class="pc-item"><a class="pc-link"
                                                                   href="../application/ecom_product-list.html">Product
                                                    List</a></li>
                                            <li class="pc-item"><a class="pc-link"
                                                                   href="../application/ecom_product-add.html">Add New
                                                    Product</a></li>
                                            <li class="pc-item"><a class="pc-link"
                                                                   href="../application/ecom_checkout.html">Checkout</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="pc-item"><a href="../application/mail.html" class="pc-link"><span
                                                class="pc-micon"><i class="ph ph-envelope-open"></i> </span><span
                                                class="pc-mtext">Mail</span></a></li>
                                    <li class="pc-item"><a href="../application/plans.html" class="pc-link"><span
                                                class="pc-micon"><i
                                                    class="ph ph-currency-circle-dollar"></i> </span><span
                                                class="pc-mtext">Plans</span></a></li>
                                    <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link"><span
                                                class="pc-micon"><i class="ph ph-user-circle"></i> </span><span
                                                class="pc-mtext">Users</span><span class="pc-arrow"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-chevron-right"><polyline
                                                        points="9 18 15 12 9 6"></polyline></svg></span></a>
                                        <ul class="pc-submenu" style="display: none;">
                                            <li class="pc-item"><a class="pc-link"
                                                                   href="../application/account-profile.html">Account
                                                    Profile</a></li>
                                            <li class="pc-item"><a class="pc-link"
                                                                   href="../application/social-media.html">Social
                                                    media</a></li>
                                            <li class="pc-item"><a class="pc-link" href="../application/user-card.html">User
                                                    Card</a></li>
                                            <li class="pc-item"><a class="pc-link" href="../application/user-list.html">User
                                                    List</a></li>
                                            <li class="pc-item"><a class="pc-link"
                                                                   href="../application/team.html">Team</a></li>
                                        </ul>
                                    </li>
                                    <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link"><span
                                                class="pc-micon"><i class="ph ph-newspaper"></i> </span><span
                                                class="pc-mtext">Invoice</span><span class="pc-arrow"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-chevron-right"><polyline
                                                        points="9 18 15 12 9 6"></polyline></svg></span></a>
                                        <ul class="pc-submenu" style="display: none;">
                                            <li class="pc-item"><a class="pc-link"
                                                                   href="../application/invoice-list.html">Invoice
                                                    List</a></li>
                                            <li class="pc-item"><a class="pc-link"
                                                                   href="../application/invoice-create.html">Create</a>
                                            </li>
                                            <li class="pc-item"><a class="pc-link"
                                                                   href="../application/invoice-view.html">Preview</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="pc-item pc-caption"><label>Pages</label> <i class="ph ph-devices"></i>
                                    </li>
                                    <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link"><span
                                                class="pc-micon"><i class="ph ph-shield-checkered"></i> </span><span
                                                class="pc-mtext">Authentication</span><span class="pc-arrow"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-chevron-right"><polyline
                                                        points="9 18 15 12 9 6"></polyline></svg></span></a>
                                        <ul class="pc-submenu" style="display: none;">
                                            <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link">Authentication 1<span
                                                        class="pc-arrow"><svg xmlns="http://www.w3.org/2000/svg"
                                                                              width="24" height="24" viewBox="0 0 24 24"
                                                                              fill="none" stroke="currentColor"
                                                                              stroke-width="2" stroke-linecap="round"
                                                                              stroke-linejoin="round"
                                                                              class="feather feather-chevron-right"><polyline
                                                                points="9 18 15 12 9 6"></polyline></svg></span></a>
                                                <ul class="pc-submenu" style="display: none;">
                                                    <li class="pc-item"><a class="pc-link" target="_blank"
                                                                           href="../pages/login-v1.html">Login</a></li>
                                                    <li class="pc-item"><a class="pc-link" target="_blank"
                                                                           href="../pages/register-v1.html">Register</a>
                                                    </li>
                                                    <li class="pc-item"><a class="pc-link" target="_blank"
                                                                           href="../pages/forgot-password-v1.html">Forgot
                                                            Password</a></li>
                                                    <li class="pc-item"><a class="pc-link" target="_blank"
                                                                           href="../pages/reset-password-v1.html">reset
                                                            password</a></li>
                                                    <li class="pc-item"><a class="pc-link" target="_blank"
                                                                           href="../pages/code-verification-v1.html">code
                                                            verification</a></li>
                                                </ul>
                                            </li>
                                            <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link">Authentication 2<span
                                                        class="pc-arrow"><svg xmlns="http://www.w3.org/2000/svg"
                                                                              width="24" height="24" viewBox="0 0 24 24"
                                                                              fill="none" stroke="currentColor"
                                                                              stroke-width="2" stroke-linecap="round"
                                                                              stroke-linejoin="round"
                                                                              class="feather feather-chevron-right"><polyline
                                                                points="9 18 15 12 9 6"></polyline></svg></span></a>
                                                <ul class="pc-submenu" style="display: none;">
                                                    <li class="pc-item"><a class="pc-link" target="_blank"
                                                                           href="../pages/login-v2.html">Login</a></li>
                                                    <li class="pc-item"><a class="pc-link" target="_blank"
                                                                           href="../pages/register-v2.html">Register</a>
                                                    </li>
                                                    <li class="pc-item"><a class="pc-link" target="_blank"
                                                                           href="../pages/forgot-password-v2.html">Forgot
                                                            password</a></li>
                                                    <li class="pc-item"><a class="pc-link" target="_blank"
                                                                           href="../pages/reset-password-v2.html">reset
                                                            password</a></li>
                                                    <li class="pc-item"><a class="pc-link" target="_blank"
                                                                           href="../pages/code-verification-v2.html">code
                                                            verification</a></li>
                                                </ul>
                                            </li>
                                            <li class="pc-item"><a class="pc-link" href="../pages/login-modal.html">Login
                                                    Modal</a></li>
                                        </ul>
                                    </li>
                                    <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link"><span
                                                class="pc-micon"><i class="ph ph-wrench"></i> </span><span
                                                class="pc-mtext">Maintenance</span><span class="pc-arrow"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-chevron-right"><polyline
                                                        points="9 18 15 12 9 6"></polyline></svg></span></a>
                                        <ul class="pc-submenu" style="display: none;">
                                            <li class="pc-item"><a class="pc-link" target="_blank"
                                                                   href="../pages/error-404.html">Error 404</a></li>
                                            <li class="pc-item"><a class="pc-link" target="_blank"
                                                                   href="../pages/connection-lost.html">Connection
                                                    lost</a></li>
                                            <li class="pc-item"><a class="pc-link" target="_blank"
                                                                   href="../pages/under-construction.html">Under
                                                    Construction</a></li>
                                            <li class="pc-item"><a class="pc-link" target="_blank"
                                                                   href="../pages/coming-soon.html">Coming soon</a></li>
                                        </ul>
                                    </li>
                                    <li class="pc-item"><a href="../pages/landing.html" class="pc-link" target="_blank"><span
                                                class="pc-micon"><i class="ph ph-rocket"></i> </span><span
                                                class="pc-mtext">Landing</span></a></li>
                                    <li class="pc-item"><a href="../pages/loading.html" class="pc-link"><span
                                                class="pc-micon"><i class="ph ph-fan"></i> </span><span
                                                class="pc-mtext">Loading</span></a></li>
                                    <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link"><span
                                                class="pc-micon"><i class="ph ph-magnifying-glass"></i> </span><span
                                                class="pc-mtext">Search</span><span class="pc-arrow"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-chevron-right"><polyline
                                                        points="9 18 15 12 9 6"></polyline></svg></span></a>
                                        <ul class="pc-submenu" style="display: none;">
                                            <li class="pc-item"><a class="pc-link" href="../pages/search-page.html">Search
                                                    Page</a></li>
                                            <li class="pc-item"><a class="pc-link" href="../pages/contact-search.html">Contact
                                                    Search</a></li>
                                        </ul>
                                    </li>
                                    <li class="pc-item"><a href="../pages/settings.html" class="pc-link"><span
                                                class="pc-micon"><i class="ph ph-globe"></i> </span><span
                                                class="pc-mtext">Site Settings</span></a></li>
                                    <li class="pc-item pc-caption"><label>Other</label> <i class="ph ph-suitcase"></i>
                                    </li>
                                    <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link"><span
                                                class="pc-micon"><i class="ph ph-tree-structure"></i> </span><span
                                                class="pc-mtext">Menu levels</span><span class="pc-arrow"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-chevron-right"><polyline
                                                        points="9 18 15 12 9 6"></polyline></svg></span></a>
                                        <ul class="pc-submenu" style="display: none;">
                                            <li class="pc-item"><a class="pc-link" href="#!">Level 2.1</a></li>
                                            <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link">Level 2.2<span
                                                        class="pc-arrow"><svg xmlns="http://www.w3.org/2000/svg"
                                                                              width="24" height="24" viewBox="0 0 24 24"
                                                                              fill="none" stroke="currentColor"
                                                                              stroke-width="2" stroke-linecap="round"
                                                                              stroke-linejoin="round"
                                                                              class="feather feather-chevron-right"><polyline
                                                                points="9 18 15 12 9 6"></polyline></svg></span></a>
                                                <ul class="pc-submenu" style="display: none;">
                                                    <li class="pc-item"><a class="pc-link" href="#!">Level 3.1</a></li>
                                                    <li class="pc-item"><a class="pc-link" href="#!">Level 3.2</a></li>
                                                    <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link">Level
                                                            3.3<span class="pc-arrow"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-chevron-right"><polyline
                                                                        points="9 18 15 12 9 6"></polyline></svg></span></a>
                                                        <ul class="pc-submenu" style="display: none;">
                                                            <li class="pc-item"><a class="pc-link" href="#!">Level
                                                                    4.1</a></li>
                                                            <li class="pc-item"><a class="pc-link" href="#!">Level
                                                                    4.2</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link">Level 2.3<span
                                                        class="pc-arrow"><svg xmlns="http://www.w3.org/2000/svg"
                                                                              width="24" height="24" viewBox="0 0 24 24"
                                                                              fill="none" stroke="currentColor"
                                                                              stroke-width="2" stroke-linecap="round"
                                                                              stroke-linejoin="round"
                                                                              class="feather feather-chevron-right"><polyline
                                                                points="9 18 15 12 9 6"></polyline></svg></span></a>
                                                <ul class="pc-submenu" style="display: none;">
                                                    <li class="pc-item"><a class="pc-link" href="#!">Level 3.1</a></li>
                                                    <li class="pc-item"><a class="pc-link" href="#!">Level 3.2</a></li>
                                                    <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link">Level
                                                            3.3<span class="pc-arrow"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-chevron-right"><polyline
                                                                        points="9 18 15 12 9 6"></polyline></svg></span></a>
                                                        <ul class="pc-submenu" style="display: none;">
                                                            <li class="pc-item"><a class="pc-link" href="#!">Level
                                                                    4.1</a></li>
                                                            <li class="pc-item"><a class="pc-link" href="#!">Level
                                                                    4.2</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="pc-item"><a href="../other/sample-page.html" class="pc-link"><span
                                                class="pc-micon"><i class="ph ph-desktop"></i> </span><span
                                                class="pc-mtext">Sample page</span></a></li>
                                </ul>
                                <div class="card nav-action-card bg-brand-color-1">
                                    <div class="card-body"
                                         style="background-image: url('../assets/images/layout/nav-card-bg.svg')"><h5
                                            class="text-white">Help Center</h5>
                                        <p class="text-white text-opacity-75">Please contact us for more questions.</p>
                                        <a href="https://codedthemes.support-hub.io/" class="btn btn-light"
                                           target="_blank">Go to help Center</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="simplebar-placeholder" style="width: 245px; height: 2988px;"></div>
            </div>
            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
            </div>
            <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                <div class="simplebar-scrollbar"
                     style="height: 73px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
            </div>
        </div>
    </div>
</nav>
<header class="pc-header">
    <div class="m-header"><a href="../dashboard/index.html" class="b-brand text-primary"> <img
                src="../assets/images/logo-white.svg" alt="logo image" class="logo-lg"> <span
                class="badge bg-white text-dark rounded-pill ms-1 theme-version">v2.1.0</span></a></div>
    <div class="header-wrapper">
        <div class="me-auto pc-mob-drp">
            <ul class="list-unstyled">
                <li class="pc-h-item pc-sidebar-collapse"><a href="#" class="pc-head-link ms-0" id="sidebar-hide"><i
                            class="ph ph-list"></i></a></li>
                <li class="pc-h-item pc-sidebar-popup"><a href="#" class="pc-head-link ms-0" id="mobile-collapse"><i
                            class="ph ph-list"></i></a></li>
                <li class="dropdown pc-h-item"><a class="pc-head-link dropdown-toggle arrow-none m-0"
                                                  data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                                  aria-expanded="false"><i class="ph ph-magnifying-glass"></i></a>
                    <div class="dropdown-menu pc-h-dropdown drp-search">
                        <form class="px-3">
                            <div class="mb-0 d-flex align-items-center"><input type="search"
                                                                               class="form-control border-0 shadow-none"
                                                                               placeholder="Search here. . .">
                                <button class="btn btn-light-secondary btn-search">Search</button>
                            </div>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
        <div class="ms-auto">
            <ul class="list-unstyled">
                <li class="dropdown pc-h-item"><a class="pc-head-link dropdown-toggle arrow-none me-0"
                                                  data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                                  aria-expanded="false"><i class="ph ph-sun-dim"></i></a>
                    <div class="dropdown-menu dropdown-menu-end pc-h-dropdown"><a href="#!" class="dropdown-item"
                                                                                  onclick="layout_change('dark')"><i
                                class="ph ph-moon"></i> <span>Dark</span> </a><a href="#!" class="dropdown-item"
                                                                                 onclick="layout_change('light')"><i
                                class="ph ph-sun-dim"></i> <span>Light</span> </a><a href="#!" class="dropdown-item"
                                                                                     onclick="layout_change_default()"><i
                                class="ph ph-cpu"></i> <span>Default</span></a></div>
                </li>
                <li class="dropdown pc-h-item"><a class="pc-head-link dropdown-toggle arrow-none me-0"
                                                  data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                                  aria-expanded="false"><i class="ph ph-diamonds-four"></i></a>
                    <div class="dropdown-menu dropdown-menu-end pc-h-dropdown"><a href="#!" class="dropdown-item"><i
                                class="ph ph-user"></i> <span>My Account</span> </a><a href="#!"
                                                                                       class="dropdown-item"><i
                                class="ph ph-gear"></i> <span>Settings</span> </a><a href="#!" class="dropdown-item"><i
                                class="ph ph-lifebuoy"></i> <span>Support</span> </a><a href="#!" class="dropdown-item"><i
                                class="ph ph-lock-key"></i> <span>Lock Screen</span> </a><a href="#!"
                                                                                            class="dropdown-item"><i
                                class="ph ph-power"></i> <span>Logout</span></a></div>
                </li>
                <li class="dropdown pc-h-item"><a class="pc-head-link dropdown-toggle arrow-none me-0"
                                                  data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                                  aria-expanded="false"><i class="ph ph-bell"></i> <span
                            class="badge bg-success pc-h-badge">3</span></a>
                    <div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown" style="">
                        <div class="dropdown-header d-flex align-items-center justify-content-between"><h4 class="m-0">
                                Notifications</h4>
                            <ul class="list-inline ms-auto mb-0">
                                <li class="list-inline-item"><a href="#" class="avtar avtar-s btn-link-hover-primary"><i
                                            class="ti ti-arrows-diagonal f-18"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="avtar avtar-s btn-link-hover-danger"><i
                                            class="ti ti-x f-18"></i></a></li>
                            </ul>
                        </div>
                        <div class="dropdown-body text-wrap header-notification-scroll position-relative"
                             style="max-height: calc(100vh - 235px)" data-simplebar="init">
                            <div class="simplebar-wrapper" style="margin: 0px;">
                                <div class="simplebar-height-auto-observer-wrapper">
                                    <div class="simplebar-height-auto-observer"></div>
                                </div>
                                <div class="simplebar-mask">
                                    <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                        <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                             aria-label="scrollable content" style="height: auto; overflow: hidden;">
                                            <div class="simplebar-content" style="padding: 0px;">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item"><p class="text-span">Today</p>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0"><img
                                                                    src="../assets/images/user/avatar-2.jpg"
                                                                    alt="user-image" class="user-avtar avtar avtar-s">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <div class="d-flex">
                                                                    <div class="flex-grow-1 me-3 position-relative"><h5
                                                                            class="mb-0 text-truncate">Keefe Bond <span
                                                                                class="text-body">added new tags to </span>💪
                                                                            Design system</h5></div>
                                                                    <div class="flex-shrink-0"><span
                                                                            class="text-sm text-muted">2 min ago</span>
                                                                    </div>
                                                                </div>
                                                                <p class="position-relative text-muted mt-1 mb-2">
                                                                    <br><span class="text-truncate">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</span>
                                                                </p><span
                                                                    class="badge bg-light-primary border border-primary me-1 mt-1">web design</span>
                                                                <span
                                                                    class="badge bg-light-warning border border-warning me-1 mt-1">Dashobard</span>
                                                                <span
                                                                    class="badge bg-light-success border border-success me-1 mt-1">Design System</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0">
                                                                <div class="avtar avtar-s bg-light-primary"><i
                                                                        class="ph ph-chats-teardrop f-18"></i></div>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <div class="d-flex">
                                                                    <div class="flex-grow-1 me-3 position-relative"><h5
                                                                            class="mb-0 text-truncate">Message</h5>
                                                                    </div>
                                                                    <div class="flex-shrink-0"><span
                                                                            class="text-sm text-muted">1 hour ago</span>
                                                                    </div>
                                                                </div>
                                                                <p class="position-relative text-muted mt-1 mb-2">
                                                                    <br><span class="text-truncate">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</span>
                                                                </p></div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item"><p class="text-span">Yesterday</p>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0">
                                                                <div class="avtar avtar-s bg-light-danger"><i
                                                                        class="ph ph-user f-18"></i></div>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <div class="d-flex">
                                                                    <div class="flex-grow-1 me-3 position-relative"><h5
                                                                            class="mb-0 text-truncate">Challenge
                                                                            invitation</h5></div>
                                                                    <div class="flex-shrink-0"><span
                                                                            class="text-sm text-muted">12 hour ago</span>
                                                                    </div>
                                                                </div>
                                                                <p class="position-relative text-muted mt-1 mb-2">
                                                                    <br><span
                                                                        class="text-truncate"><strong>Jonny aber </strong>invites to join the challenge</span>
                                                                </p>
                                                                <button
                                                                    class="btn btn-sm rounded-pill btn-outline-secondary me-2">
                                                                    Decline
                                                                </button>
                                                                <button class="btn btn-sm rounded-pill btn-primary">
                                                                    Accept
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0">
                                                                <div class="avtar avtar-s bg-light-info"><i
                                                                        class="ph ph-notebook f-18"></i></div>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <div class="d-flex">
                                                                    <div class="flex-grow-1 me-3 position-relative"><h5
                                                                            class="mb-0 text-truncate">Forms</h5></div>
                                                                    <div class="flex-shrink-0"><span
                                                                            class="text-sm text-muted">2 hour ago</span>
                                                                    </div>
                                                                </div>
                                                                <p class="position-relative text-muted mt-1 mb-2">Lorem
                                                                    Ipsum is simply dummy text of the printing and
                                                                    typesetting industry. Lorem Ipsum has been the
                                                                    industry's standard dummy text ever since the
                                                                    1500s.</p></div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0"><img
                                                                    src="../assets/images/user/avatar-2.jpg"
                                                                    alt="user-image" class="user-avtar avtar avtar-s">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <div class="d-flex">
                                                                    <div class="flex-grow-1 me-3 position-relative"><h5
                                                                            class="mb-0 text-truncate">Keefe Bond <span
                                                                                class="text-body">added new tags to </span>💪
                                                                            Design system</h5></div>
                                                                    <div class="flex-shrink-0"><span
                                                                            class="text-sm text-muted">2 min ago</span>
                                                                    </div>
                                                                </div>
                                                                <p class="position-relative text-muted mt-1 mb-2">
                                                                    <br><span class="text-truncate">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</span>
                                                                </p>
                                                                <button
                                                                    class="btn btn-sm rounded-pill btn-outline-secondary me-2">
                                                                    Decline
                                                                </button>
                                                                <button class="btn btn-sm rounded-pill btn-primary">
                                                                    Accept
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0">
                                                                <div class="avtar avtar-s bg-light-success"><i
                                                                        class="ph ph-shield-checkered f-18"></i></div>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <div class="d-flex">
                                                                    <div class="flex-grow-1 me-3 position-relative"><h5
                                                                            class="mb-0 text-truncate">Security</h5>
                                                                    </div>
                                                                    <div class="flex-shrink-0"><span
                                                                            class="text-sm text-muted">5 hour ago</span>
                                                                    </div>
                                                                </div>
                                                                <p class="position-relative text-muted mt-1 mb-2">Lorem
                                                                    Ipsum is simply dummy text of the printing and
                                                                    typesetting industry. Lorem Ipsum has been the
                                                                    industry's standard dummy text ever since the
                                                                    1500s.</p></div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div>
                            </div>
                            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                            </div>
                            <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                <div class="simplebar-scrollbar"
                                     style="height: 0px; display: none; transform: translate3d(0px, 0px, 0px);"></div>
                            </div>
                        </div>
                        <div class="dropdown-footer">
                            <div class="row g-3">
                                <div class="col-6">
                                    <div class="d-grid">
                                        <button class="btn btn-primary">Archive all</button>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-grid">
                                        <button class="btn btn-outline-secondary">Mark all as read</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="dropdown pc-h-item header-user-profile"><a
                        class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" data-bs-auto-close="outside" aria-expanded="false"><img
                            src="../assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar"></a>
                    <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown" style="">
                        <div class="dropdown-header d-flex align-items-center justify-content-between"><h4 class="m-0">
                                Profile</h4></div>
                        <div class="dropdown-body">
                            <div class="profile-notification-scroll position-relative"
                                 style="max-height: calc(100vh - 225px)" data-simplebar="init">
                                <div class="simplebar-wrapper" style="margin: 0px;">
                                    <div class="simplebar-height-auto-observer-wrapper">
                                        <div class="simplebar-height-auto-observer"></div>
                                    </div>
                                    <div class="simplebar-mask">
                                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                            <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                                 aria-label="scrollable content"
                                                 style="height: auto; overflow: hidden;">
                                                <div class="simplebar-content" style="padding: 0px;">
                                                    <ul class="list-group list-group-flush w-100">
                                                        <li class="list-group-item">
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0"><img
                                                                        src="../assets/images/user/avatar-2.jpg"
                                                                        alt="user-image" class="wid-50 rounded-circle">
                                                                </div>
                                                                <div class="flex-grow-1 mx-3"><h5 class="mb-0">Carson
                                                                        Darrin</h5><a class="link-primary"
                                                                                      href="mailto:carson.darrin@company.io">carson.darrin@company.io</a>
                                                                </div>
                                                                <span class="badge bg-primary">PRO</span></div>
                                                        </li>
                                                        <li class="list-group-item"><a href="#"
                                                                                       class="dropdown-item"><span
                                                                    class="d-flex align-items-center"><i
                                                                        class="ph ph-key"></i> <span>Change password</span> </span></a><a
                                                                href="#" class="dropdown-item"><span
                                                                    class="d-flex align-items-center"><i
                                                                        class="ph ph-envelope-simple"></i> <span>Recently mail</span></span>
                                                                <div class="user-group"><img
                                                                        src="../assets/images/user/avatar-1.jpg"
                                                                        alt="user-image" class="avtar"> <img
                                                                        src="../assets/images/user/avatar-2.jpg"
                                                                        alt="user-image" class="avtar"> <img
                                                                        src="../assets/images/user/avatar-3.jpg"
                                                                        alt="user-image" class="avtar"></div>
                                                            </a><a href="#" class="dropdown-item"><span
                                                                    class="d-flex align-items-center"><i
                                                                        class="ph ph-calendar-blank"></i> <span>Schedule meetings</span></span></a>
                                                        </li>
                                                        <li class="list-group-item"><a href="#"
                                                                                       class="dropdown-item"><span
                                                                    class="d-flex align-items-center"><i
                                                                        class="ph ph-heart"></i> <span>Favorite</span> </span></a><a
                                                                href="#" class="dropdown-item"><span
                                                                    class="d-flex align-items-center"><i
                                                                        class="ph ph-arrow-circle-down"></i> <span>Download</span> </span><span
                                                                    class="avtar avtar-xs rounded-circle bg-danger text-white">10</span></a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="dropdown-item"><span
                                                                    class="d-flex align-items-center"><i
                                                                        class="ph ph-globe-hemisphere-west"></i> <span>Languages</span> </span><span
                                                                    class="flex-shrink-0"><select
                                                                        class="form-select bg-transparent form-select-sm border-0 shadow-none"><option
                                                                            value="1">English</option><option value="2">Spain</option><option
                                                                            value="3">Arbic</option></select></span>
                                                            </div>
                                                            <a href="#" class="dropdown-item"><span
                                                                    class="d-flex align-items-center"><i
                                                                        class="ph ph-flag"></i> <span>Country</span></span></a>
                                                            <div class="dropdown-item"><span
                                                                    class="d-flex align-items-center"><i
                                                                        class="ph ph-moon"></i> <span>Dark mode</span></span>
                                                                <div
                                                                    class="form-check form-switch form-check-reverse m-0">
                                                                    <input class="form-check-input f-18" id="dark-mode"
                                                                           type="checkbox" onclick="dark_mode()"
                                                                           role="switch"></div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item"><a href="#"
                                                                                       class="dropdown-item"><span
                                                                    class="d-flex align-items-center"><i
                                                                        class="ph ph-user-circle"></i> <span>Edit profile</span> </span></a><a
                                                                href="#" class="dropdown-item"><span
                                                                    class="d-flex align-items-center"><i
                                                                        class="ph ph-star text-warning"></i> <span>Upgrade account</span> <span
                                                                        class="badge bg-light-success border border-success ms-2">NEW</span> </span></a><a
                                                                href="#" class="dropdown-item"><span
                                                                    class="d-flex align-items-center"><i
                                                                        class="ph ph-bell"></i> <span>Notifications</span> </span></a><a
                                                                href="#" class="dropdown-item"><span
                                                                    class="d-flex align-items-center"><i
                                                                        class="ph ph-gear-six"></i> <span>Settings</span></span></a>
                                                        </li>
                                                        <li class="list-group-item"><a href="#"
                                                                                       class="dropdown-item"><span
                                                                    class="d-flex align-items-center"><i
                                                                        class="ph ph-plus-circle"></i> <span>Add account</span> </span></a><a
                                                                href="#" class="dropdown-item"><span
                                                                    class="d-flex align-items-center"><i
                                                                        class="ph ph-power"></i> <span>Logout</span></span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div>
                                </div>
                                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                    <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                </div>
                                <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                    <div class="simplebar-scrollbar"
                                         style="height: 0px; display: none; transform: translate3d(0px, 0px, 0px);"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</header>
<div class="pc-container">
    <div class="pc-content">
        <div class="page-header">
            <div class="page-block card mb-0">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title border-bottom pb-2 mb-2"><h4 class="mb-0">Statistics</h4>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../dashboard/index.html"><i
                                            class="ph ph-house"></i></a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0)">Widget</a></li>
                                <li class="breadcrumb-item" aria-current="page">Statistics</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../assets/js/plugins/popper.min.js"></script>
<script src="../assets/js/plugins/simplebar.min.js"></script>
<script src="../assets/js/plugins/bootstrap.min.js"></script>
<script src="../assets/js/fonts/custom-font.js"></script>

<script src="../assets/js/pcoded.js"></script>
<script src="../assets/js/plugins/feather.min.js"></script>





<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="{{ url('backend/js/plugins/popper.min.js') }}"></script>
<script src="{{ url('backend/js/plugins/simplebar.min.js') }}"></script>
<script src="{{ url('backend/js/plugins/bootstrap.min.js') }}"></script>
<script src="{{ url('backend/js/fonts/custom-font.js') }}"></script>

<script src="{{ url('backend/js/pcoded.js') }}"></script>
<script src="{{ url('backend/js/plugins/feather.min.js') }}"></script>


</body>
</html>
