@extends('layouts.app')

@section('title', 'Proyectos')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                    <div class="wrapper wrapper-content">
        <div class="row">
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-success pull-right">Monthly</span>
                                <h5>Income</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">40 886,200</h1>
                                <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                                <small>Total income</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-info pull-right">Annual</span>
                                <h5>Orders</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">275,800</h1>
                                <div class="stat-percent font-bold text-info">20% <i class="fa fa-level-up"></i></div>
                                <small>New orders</small>
                          
                          
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-primary pull-right">Today</span>
                                <h5>visits</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">106,120</h1>
                                <div class="stat-percent font-bold text-navy">44% <i class="fa fa-level-up"></i></div>
                                <small>New visits</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-danger pull-right">Low value</span>
                                <h5>User activity</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">80,600</h1>
                                <div class="stat-percent font-bold text-danger">38% <i class="fa fa-level-down"></i></div>
                                <small>In first month</small>
                            </div>
                        </div>
            </div>
        </div>
        <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Orders</h5>
                                <div class="pull-right">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-xs btn-white active">Today</button>
                                        <button type="button" class="btn btn-xs btn-white">Monthly</button>
                                        <button type="button" class="btn btn-xs btn-white">Annual</button>
                                    </div>
                                </div>
                            </div>
                            <div class="ibox-content">
                                <div class="row">
                                <div class="col-lg-9">
                                    <div class="flot-chart">
                                        <div class="flot-chart-content" id="flot-dashboard-chart" style="padding: 0px; position: relative;">
                                        <canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 803.75px; height: 200px;" width="643" height="160"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px;"><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 72px; top: 185px; left: 67px; text-align: center;">Jan 03</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 72px; top: 185px; left: 141px; text-align: center;">Jan 06</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 72px; top: 185px; left: 214px; text-align: center;">Jan 09</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 72px; top: 185px; left: 288px; text-align: center;">Jan 12</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 72px; top: 185px; left: 361px; text-align: center;">Jan 15</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 72px; top: 185px; left: 435px; text-align: center;">Jan 18</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 72px; top: 185px; left: 509px; text-align: center;">Jan 21</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 72px; top: 185px; left: 582px; text-align: center;">Jan 24</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 72px; top: 185px; left: 656px; text-align: center;">Jan 27</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 72px; top: 185px; left: 729px; text-align: center;">Jan 30</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 173px; left: 19px; text-align: right;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 132px; left: 6px; text-align: right;">250</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 92px; left: 6px; text-align: right;">500</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 52px; left: 6px; text-align: right;">750</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 12px; left: 0px; text-align: right;">1000</div></div><div class="flot-y-axis flot-y2-axis yAxis y2Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 173px; left: 791px;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 144px; left: 791px;">5</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 115px; left: 791px;">10</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 87px; left: 791px;">15</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 58px; left: 791px;">20</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 29px; left: 791px;">25</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 1px; left: 791px;">30</div></div></div><canvas class="flot-overlay" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 803.75px; height: 200px;" width="643" height="160"></canvas><div class="legend"><div style="position: absolute; width: 111.25px; height: 30px; top: 13px; left: 35px; background-color: rgb(255, 255, 255); opacity: 0.85;"> </div><table style="position:absolute;top:13px;left:35px;;font-size:smaller;color:#545454"><tbody><tr><td class="legendColorBox"><div style="border:1px solid #000000;padding:1px"><div style="width:4px;height:0;border:5px solid #1ab394;overflow:hidden"></div></div></td><td class="legendLabel">Number of orders</td></tr><tr><td class="legendColorBox"><div style="border:1px solid #000000;padding:1px"><div style="width:4px;height:0;border:5px solid #1C84C6;overflow:hidden"></div></div></td><td class="legendLabel">Payments</td></tr></tbody></table></div></div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <ul class="stat-list">
                                        <li>
                                            <h2 class="no-margins">2,346</h2>
                                            <small>Total orders in period</small>
                                            <div class="stat-percent">48% <i class="fa fa-level-up text-navy"></i></div>
                                            <div class="progress progress-mini">
                                                <div style="width: 48%;" class="progress-bar"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <h2 class="no-margins ">4,422</h2>
                                            <small>Orders in last month</small>
                                            <div class="stat-percent">60% <i class="fa fa-level-down text-navy"></i></div>
                                            <div class="progress progress-mini">
                                                <div style="width: 60%;" class="progress-bar"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <h2 class="no-margins ">9,180</h2>
                                            <small>Monthly income from orders</small>
                                            <div class="stat-percent">22% <i class="fa fa-bolt text-navy"></i></div>
                                            <div class="progress progress-mini">
                                                <div style="width: 22%;" class="progress-bar"></div>
                                            </div>
                                        </li>
                                        </ul>
                                    </div>
                                </div>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>
                    </div>
                </div>
            </div>
         
@endsection
