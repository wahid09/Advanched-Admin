@extends('layouts.backend.app')

@section('content')
{{-- <div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                        </i>
            </div>
        <div>
            @role('super-admin')
            Super Admin Dashboard
            @else 
            Dashboard
            @endrole
        <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.
        </div>
    </div>
</div>
<div class="page-title-actions">
    <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark"><i class="fa fa-star"></i>
    </button>
    <div class="d-inline-block dropdown">
    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
    <span class="btn-icon-wrapper pr-2 opacity-7">
    <i class="fa fa-business-time fa-w-20"></i>
    </span> Buttons</button>
    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
    <ul class="nav flex-column"><li class="nav-item">
        <a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon lnr-inbox"></i>
        <span>Inbox</span>
        <div class="ml-auto badge badge-pill badge-secondary">86</div>
        </a></li>
        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon lnr-book"></i><span>Book</span>
        <div class="ml-auto badge badge-pill badge-danger">5</div>
        </a></li>
        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon lnr-picture"></i>
        <span>Picture</span></a></li>
        <li class="nav-item"><a disabled href="javascript:void(0);" class="nav-link disabled"><i class="nav-link-icon lnr-file-empty"></i><span>File Disabled</span></a></li>
    </ul>
    </div>
    </div>
    </div>    
    </div>
</div>

<div class="row">
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-midnight-bloom">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Total Orders</div>
                        <div class="widget-subheading">Last year expenses</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-white"><span>1896</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-arielle-smile">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Clients</div>
                                    <div class="widget-subheading">Total Clients Profit</div>
                                    </div>
                                    <div class="widget-content-right">
                                    <div class="widget-numbers text-white"><span>$ 568</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div class="card mb-3 widget-content bg-grow-early">
                            <div class="widget-content-wrapper text-white">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Followers

                                    </div>
                                    <div class="widget-subheading">People Interested</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-white"><span>46%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
                        <div class="card mb-3 widget-content bg-premium-dark">
                            <div class="widget-content-wrapper text-white">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Products Sold</div>
                                       <div class="widget-subheading">Revenue streams

                                        </div>
                                    </div>
                                    <div class="widget-content-right">
                                      <div class="widget-numbers text-warning"><span>$14M</span>
                                    </div>
                                </div>
            </div>
        </div>
    </div>
</div>
                        
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-header">Active Users
                                        <div class="btn-actions-pane-right">
                                            <div role="group" class="btn-group-sm btn-group">
                                                <button class="active btn btn-focus">Last Week</button>
                                                <button class="btn btn-focus">All Month</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th>Name</th>
                                                <th class="text-center">City</th>
                                                <th class="text-center">Status</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="text-center text-muted">#345</td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <div class="widget-content-left">
                                                                    <img width="40" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading">John Doe</div>
                                                                <div class="widget-subheading opacity-7">Web Developer</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">Madrid</td>
                                                <td class="text-center">
                                                    <div class="badge badge-warning">Pending</div>
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">Details</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center text-muted">#347</td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <div class="widget-content-left">
                                                                    <img width="40" class="rounded-circle" src="assets/images/avatars/3.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading">Ruben Tillman</div>
                                                                <div class="widget-subheading opacity-7">Etiam sit amet orci eget</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">Berlin</td>
                                                <td class="text-center">
                                                    <div class="badge badge-success">Completed</div>
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" id="PopoverCustomT-2" class="btn btn-primary btn-sm">Details</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center text-muted">#321</td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <div class="widget-content-left">
                                                                    <img width="40" class="rounded-circle" src="assets/images/avatars/2.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading">Elliot Huber</div>
                                                                <div class="widget-subheading opacity-7">Lorem ipsum dolor sic</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">London</td>
                                                <td class="text-center">
                                                    <div class="badge badge-danger">In Progress</div>
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" id="PopoverCustomT-3" class="btn btn-primary btn-sm">Details</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center text-muted">#55</td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <div class="widget-content-left">
                                                                    <img width="40" class="rounded-circle" src="assets/images/avatars/1.jpg" alt=""></div>
                                                            </div>
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading">Vinnie Wagstaff</div>
                                                                <div class="widget-subheading opacity-7">UI Designer</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">Amsterdam</td>
                                                <td class="text-center">
                                                    <div class="badge badge-info">On Hold</div>
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" id="PopoverCustomT-4" class="btn btn-primary btn-sm">Details</button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="d-block text-center card-footer">
                                        <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
                                        <button class="btn-wide btn btn-success">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="row">
                    <div class="col-lg-6 mb-3">
                        <section class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-8">
                                        <div class="chart-data-selector" id="salesSelectorWrapper">
                                            <h2>
                                                Sales:
                                                <strong>
                                                    <select class="form-control" id="salesSelector">
                                                        <option value="Porto Admin" selected>Porto Admin</option>
                                                        <option value="Porto Drupal" >Porto Drupal</option>
                                                        <option value="Porto Wordpress" >Porto Wordpress</option>
                                                    </select>
                                                </strong>
                                            </h2>
                
                                            <div id="salesSelectorItems" class="chart-data-selector-items mt-3">
                                                <!-- Flot: Sales Porto Admin -->
                                                <div class="chart chart-sm" data-sales-rel="Porto Admin" id="flotDashSales1" class="chart-active" style="height: 203px;"></div>
                                                <script>
                
                                                    var flotDashSales1Data = [{
                                                        data: [
                                                            ["Jan", 140],
                                                            ["Feb", 240],
                                                            ["Mar", 190],
                                                            ["Apr", 140],
                                                            ["May", 180],
                                                            ["Jun", 320],
                                                            ["Jul", 270],
                                                            ["Aug", 180]
                                                        ],
                                                        color: "#0088cc"
                                                    }];
                
                
                                                </script>
                
                                                <!-- Flot: Sales Porto Drupal -->
                                                <div class="chart chart-sm" data-sales-rel="Porto Drupal" id="flotDashSales2" class="chart-hidden"></div>
                                                <script>
                
                                                    var flotDashSales2Data = [{
                                                        data: [
                                                            ["Jan", 240],
                                                            ["Feb", 240],
                                                            ["Mar", 290],
                                                            ["Apr", 540],
                                                            ["May", 480],
                                                            ["Jun", 220],
                                                            ["Jul", 170],
                                                            ["Aug", 190]
                                                        ],
                                                        color: "#2baab1"
                                                    }];
                
                                                    
                
                                                </script>
                
                                                <!-- Flot: Sales Porto Wordpress -->
                                                <div class="chart chart-sm" data-sales-rel="Porto Wordpress" id="flotDashSales3" class="chart-hidden"></div>
                                                <script>
                
                                                    var flotDashSales3Data = [{
                                                        data: [
                                                            ["Jan", 840],
                                                            ["Feb", 740],
                                                            ["Mar", 690],
                                                            ["Apr", 940],
                                                            ["May", 1180],
                                                            ["Jun", 820],
                                                            ["Jul", 570],
                                                            ["Aug", 780]
                                                        ],
                                                        color: "#734ba9"
                                                    }];
                
                                                    
                
                                                </script>
                                            </div>
                
                                        </div>
                                    </div>
                                    <div class="col-xl-4 text-center">
                                        <h2 class="card-title mt-3">Sales Goal</h2>
                                        <div class="liquid-meter-wrapper liquid-meter-sm mt-3">
                                            <div class="liquid-meter">
                                                <meter min="0" max="100" value="35" id="meterSales"></meter>
                                            </div>
                                            <div class="liquid-meter-selector mt-4 pt-1" id="meterSalesSel">
                                                <a href="#" data-val="35" class="active">Monthly Goal</a>
                                                <a href="#" data-val="28">Annual Goal</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-6">
                        <div class="row mb-3">
                            <div class="col-xl-6">
                                <section class="card card-featured-left card-featured-primary mb-3">
                                    <div class="card-body">
                                        <div class="template-summery widget-summary">
                                            <div class="widget-summary-col widget-summary-col-icon">
                                                <div class="summary-icon bg-primary">
                                                    <i class="fa fa-table"></i>
                                                </div>
                                            </div>
                                            <div class="widget-summary-col">
                                                <div class="summary">
                                                    <div class="info">
                                                        <strong class="amount">1281</strong>
                                                    </div>
                                                </div>
                                                <div class="summary-footer">
                                                    <strong class="summary-name">Packages</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="col-xl-6">
                                <section class="card card-featured-left card-featured-secondary">
                                    <div class="card-body">
                                        <div class="template-summery widget-summary">
                                            <div class="widget-summary-col widget-summary-col-icon">
                                                <div class="summary-icon bg-primary">
                                                    <i class="fa fa-handshake-o"></i>
                                                </div>
                                            </div>
                                            <div class="widget-summary-col">
                                                <div class="summary">
                                                    <div class="info">
                                                        <strong class="amount">1281</strong>
                                                    </div>
                                                </div>
                                                <div class="summary-footer">
                                                    <strong class="summary-name">Merchants</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <section class="card card-featured-left card-featured-tertiary mb-3">
                                    <div class="card-body">
                                        <div class="template-summery widget-summary">
                                            <div class="widget-summary-col widget-summary-col-icon">
                                                <div class="summary-icon bg-primary">
                                                    <i class="fa fa-universal-access"></i>
                                                </div>
                                            </div>
                                            <div class="widget-summary-col">
                                                <div class="summary">
                                                    <div class="info">
                                                        <strong class="amount">1281</strong>
                                                    </div>
                                                </div>
                                                <div class="summary-footer">
                                                    <strong class="summary-name">Roles</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="col-xl-6">
                                <section class="card card-featured-left card-featured-quaternary">
                                    <div class="card-body">
                                        <div class="template-summery widget-summary">
                                            <div class="widget-summary-col widget-summary-col-icon">
                                                <div class="summary-icon bg-primary">
                                                    <i class="fa fa-users"></i>
                                                </div>
                                            </div>
                                            <div class="widget-summary-col">
                                                <div class="summary">
                                                    <div class="info">
                                                        <strong class="amount">1281</strong>
                                                    </div>
                                                </div>
                                                <div class="summary-footer">
                                                    <strong class="summary-name">Employees</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row pt-4">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <section class="card">
                            <header class="card-header">
                                <div class="card-actions">
                                    <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                                    <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                                </div>
                
                                <h2 class="card-title">Best Seller</h2>
                                <p class="card-subtitle">Customize the graphs as much as you want, there are so many options and features to display information using Porto Admin Template.</p>
                            </header>
                            <div class="card-body">
                
                                <!-- Flot: Basic -->
                                <div class="chart chart-md" id="flotDashBasic"></div>
                                <script>
                
                                    var flotDashBasicData = [{
                                        data: [
                                            [0, 170],
                                            [1, 169],
                                            [2, 173],
                                            [3, 188],
                                            [4, 147],
                                            [5, 113],
                                            [6, 128],
                                            [7, 169],
                                            [8, 173],
                                            [9, 128],
                                            [10, 128]
                                        ],
                                        label: "Series 1",
                                        color: "#0088cc"
                                    }, {
                                        data: [
                                            [0, 115],
                                            [1, 124],
                                            [2, 114],
                                            [3, 121],
                                            [4, 115],
                                            [5, 83],
                                            [6, 102],
                                            [7, 148],
                                            [8, 147],
                                            [9, 103],
                                            [10, 113]
                                        ],
                                        label: "Series 2",
                                        color: "#2baab1"
                                    }, {
                                        data: [
                                            [0, 70],
                                            [1, 69],
                                            [2, 73],
                                            [3, 88],
                                            [4, 47],
                                            [5, 13],
                                            [6, 28],
                                            [7, 69],
                                            [8, 73],
                                            [9, 28],
                                            [10, 28]
                                        ],
                                        label: "Series 3",
                                        color: "#734ba9"
                                    }];
                
                                    
                
                                </script>
                
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-6">
                        <section class="card">
                            <header class="card-header">
                                <div class="card-actions">
                                    <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                                    <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                                </div>
                                <h2 class="card-title">Server Usage</h2>
                                <p class="card-subtitle">It's easy to create custom graphs on Porto Admin Template, there are several graph types that you can use.</p>
                            </header>
                            <div class="card-body">
                
                                <!-- Flot: Curves -->
                                <div class="chart chart-md" id="flotDashRealTime"></div>
                
                            </div>
                        </section>
                    </div>
                </div>
                        
@endsection