@extends('master')
@section('main')
<div class="container-fluid">

    <div class="animated fadeIn">

        <h2 class="row">Top Sales</h2>
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-primary">
                    <div class="card-body pb-0">
                        <h2 class="mb-0">&#8358;326,490,000</h2>
                        <h4>GText Homes</h4>
                    </div>
                    <div class="chart-wrapper px-3" style="height:70px;">
                        <canvas id="card-chart1" class="chart" height="70"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-info">
                    <div class="card-body pb-0">
                        <h2 class="mb-0">&#8358;326,490,000</h2>
                        <h4>Rock & Slay</h4>
                    </div>
                    <div class="chart-wrapper px-3" style="height:70px;">
                        <canvas id="card-chart2" class="chart" height="70"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-warning">
                    <div class="card-body pb-0">
                        <h2 class="mb-0">&#8358;326,490,000</h2>
                        <h4>GText Mall</h4>
                    </div>
                    <div class="chart-wrapper" style="height:70px;">
                        <canvas id="card-chart3" class="chart" height="70"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-danger">
                    <div class="card-body pb-0">
                        <h2 class="mb-0">&#8358;326,490,000</h2>
                        <h4>GText Media</h4>
                    </div>
                    <div class="chart-wrapper px-3" style="height:70px;">
                        <canvas id="card-chart4" class="chart" height="70"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="row">15 days Sales Analysis</h2>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <canvas id="canvas-1"></canvas>
                </div>
            </div>
        </div>

        <h2 class="row">Others</h2>
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="social-box facebook">
                    <i class="fa fa-facebook"></i>
                    <div class="chart-wrapper">
                        <canvas id="social-box-chart-1" height="90"></canvas>
                    </div>
                    <ul>
                        <li>
                            <strong>89k</strong>
                            <span>friends</span>
                        </li>
                        <li>
                            <strong>459</strong>
                            <span>feeds</span>
                        </li>
                    </ul>
                </div>
                <!--/.social-box-->
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="social-box twitter">
                    <i class="fa fa-twitter"></i>
                    <div class="chart-wrapper">
                        <canvas id="social-box-chart-2" height="90"></canvas>
                    </div>
                    <ul>
                        <li>
                            <strong>973k</strong>
                            <span>followers</span>
                        </li>
                        <li>
                            <strong>1.792</strong>
                            <span>tweets</span>
                        </li>
                    </ul>
                </div>
                <!--/.social-box-->
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">

                <div class="social-box linkedin">
                    <i class="fa fa-linkedin"></i>
                    <div class="chart-wrapper">
                        <canvas id="social-box-chart-3" height="90"></canvas>
                    </div>
                    <ul>
                        <li>
                            <strong>500+</strong>
                            <span>contacts</span>
                        </li>
                        <li>
                            <strong>292</strong>
                            <span>feeds</span>
                        </li>
                    </ul>
                </div>
                <!--/.social-box-->
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="social-box google-plus">
                    <i class="fa fa-google-plus"></i>
                    <div class="chart-wrapper">
                        <canvas id="social-box-chart-4" height="90"></canvas>
                    </div>
                    <ul>
                        <li>
                            <strong>894</strong>
                            <span>followers</span>
                        </li>
                        <li>
                            <strong>92</strong>
                            <span>circles</span>
                        </li>
                    </ul>
                </div>
                <!--/.social-box-->
            </div>
            <!--/.col-->
        </div>
</div>

@endsection