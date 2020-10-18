@extends('backend.master')

@section('content')
<div class="page-inner">
    <div class="page-title">
        <div class="page-breadcrumb">
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h3 class="panel-title">Sales</h3>
                        <div class="panel-control">
                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-reload" data-original-title="Reload"><i class="icon-reload"></i></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="panel-header-stats">

                        </div>
                        <div>
                            {!! $chart->container() !!}
                        </div>
                    </div>
                </div>
            </div>
            {!! $chart->script() !!}
            <div class="col-md-6">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h3 class="panel-title">Visitors</h3>
                        <div class="panel-control">
                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-reload" data-original-title="Reload"><i class="icon-reload"></i></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="panel-header-stats">
                            <div class="row">
                                <div class="col-md-3 col-xs-6">
                                    <i class="icon-users"></i>
                                    <h4 class="no-m">Total: 4500</h4>
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <i class="icon-user"></i>
                                    <h4 class="no-m">Male: 2600</h4>
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <i class="icon-user-female"></i>
                                    <h4 class="no-m">Female: 1900</h4>
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <i class="icon-user-follow"></i>
                                    <h4 class="no-m">Avg: 2250</h4>
                                </div>
                            </div>
                        </div>
                        <div>
                            <canvas id="chart2" height="165"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-white">
                    <div class="panel-heading">
                        <h4 class="panel-title">Weather</h4>
                        <div class="panel-control">
                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-reload" data-original-title="Reload"><i class="icon-reload"></i></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="weather-widget">
                            <div class="row">
                                <div class="col-md-12 col-weather-headline">
                                    <div class="weather-top">
                                        <div class="weather-current pull-left">
                                            <i class="wi wi-day-cloudy weather-icon"></i>
                                            <p><span>83<sup>°F</sup></span></p>
                                        </div>
                                        <h2 class="weather-day pull-right">Amsterdam, NL<br><small><b>6th July, 2016</b></small></h2>
                                    </div>
                                </div>
                                <div class="col-md-6 col-weather-info">
                                    <ul class="list-unstyled weather-info">
                                        <li>Wind <span class="pull-right"><b>ESE 16 mph</b></span></li>
                                        <li>Humidity <span class="pull-right"><b>64%</b></span></li>
                                        <li>Pressure <span class="pull-right"><b>30.15 in</b></span></li>
                                        <li>UV Index <span class="pull-right"><b>6</b></span></li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-weather-info">
                                    <ul class="list-unstyled weather-info">
                                        <li>Cloud Cover <span class="pull-right"><b>60%</b></span></li>
                                        <li>Ceiling <span class="pull-right"><b>17800 ft</b></span></li>
                                        <li>Dew Point <span class="pull-right"><b>70° F</b></span></li>
                                        <li>Visibility <span class="pull-right"><b>10 mi</b></span></li>
                                    </ul>
                                </div>
                                <div class="col-md-12">
                                    <ul class="list-unstyled weather-days row">
                                        <li class="col-xs-4 col-sm-2"><span>12:00</span><i class="wi wi-day-cloudy"></i><span>82<sup>°F</sup></span></li>
                                        <li class="col-xs-4 col-sm-2"><span>13:00</span><i class="wi wi-day-cloudy"></i><span>82<sup>°F</sup></span></li>
                                        <li class="col-xs-4 col-sm-2"><span>14:00</span><i class="wi wi-day-cloudy"></i><span>82<sup>°F</sup></span></li>
                                        <li class="col-xs-4 col-sm-2"><span>15:00</span><i class="wi wi-day-cloudy"></i><span>83<sup>°F</sup></span></li>
                                        <li class="col-xs-4 col-sm-2"><span>16:00</span><i class="wi wi-day-cloudy"></i><span>82<sup>°F</sup></span></li>
                                        <li class="col-xs-4 col-sm-2"><span>17:00</span><i class="wi wi-day-sunny-overcast"></i><span>82<sup>°F</sup></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h3 class="panel-title">Table</h3>
                        <div class="panel-control">
                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expand/Collapse"><i class="icon-arrow-down"></i></a>
                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-reload" data-original-title="Reload"><i class="icon-reload"></i></a>
                        </div>
                    </div>
                    <div class="panel-body statement-card">
                        <div class="statement-card-head">
                            <a class="btn btn-success" href="{{route('excel')}}">Download Execel</a>
                            <a class="btn btn-danger" href="{{route('pdf')}}">Download Pdf</a>
                            <p><sup>$</sup><b>{{$bill}}</b></p>
                        </div>
                        <table class="table table-responsive">
                            <tbody>
                            <tr>
                                <th scope="row">Order ID</th>
                                <td>Product Name</td>
                                <td>Product Price</td>
                            </tr>
                            @foreach($billing as $bill)
                                <tr>
                                    <th scope="row">ID: {{$bill->id}}</th>
                                    <td>{{$bill->product->product_name}}</td>
                                    <td class="text-success"><b>${{$bill->product->product_price}}</b></td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                        <tfooter style="float:right">
                            <tr>{{$billing->links()}}</tr>
                        </tfooter>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Main Wrapper -->
    <div class="page-footer">
        <p class="no-s">Made with <i class="fa fa-heart"></i> by stacks</p>
    </div>
</div><!-- Page Inner -->
@endsection
