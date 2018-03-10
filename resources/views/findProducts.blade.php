@extends('master')
@section('head')
    <style>
        .categories {
            position: static;
            min-width: 100%;
            overflow-x: scroll;
            overflow-y: hidden;
            white-space: nowrap;
        }
    </style>
@endsection
@section('main')
    <div class="card">
        <div class="card-header">
            Line Chart
            <div class="card-actions">
                <a href="http://www.chartjs.org">
                    <small class="text-muted">docs</small>
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="chart-wrapper">
                <canvas id="canvas-1"></canvas>
            </div>
        </div>
    </div>
    <div class="row" style="padding: 0 100px">
        <div style="margin: 30px 0 10px 0!important"><h2>Your Statistics </h2></div><br />
    </div>
    <div class="row" style="padding: 0 100px">
        <div class="col-sm-6 col-lg-3">
            <div class="social-box">
                <br />
                <br />
                <h4>Yesterday's Affiliate Sales</h4>

                <ul>
                    <li>
                        <strong>NGN</strong>

                    </li>
                    <li>
                        <strong>0.00</strong>

                    </li>
                </ul>

            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="social-box">
                <br />
                <br />
                <h4>Yesterday's Affiliate Snapshot</h4>

                <ul>
                    <li>
                        <strong>NGN</strong>

                    </li>
                    <li>
                        <strong>0.00</strong>

                    </li>
                </ul>

            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="social-box">
                <br />
                <br />
                <h4>Todays's Affiliate Sales</h4>

                <ul>
                    <li>
                        <strong>NGN</strong>

                    </li>
                    <li>
                        <strong>0.00</strong>

                    </li>
                </ul>

            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="social-box">
                <br />
                <br />
                <h4>Todays's Affiliate Snapshot</h4>

                <ul>
                    <li>
                        <strong>NGN</strong>

                    </li>
                    <li>
                        <strong>0.00</strong>

                    </li>
                </ul>

            </div>
        </div>
    </div>

    <div class="row">
        <div style="margin: 80px 0 10px 0!important; text-align: center" align="center"><h2>Categories </h2></div><br />
    </div>
        <div class="categories" style="position: static; min-width: 100%; overflow-x: scroll; overflow-y: hidden; white-space: nowrap">
            <div class="card bg-primary" style="display: inline-flex; width: 200px; height: 200px; text-align: center; font-size: xx-large; margin: 4px; padding: 50px">Content</div>
            <div class="card bg-light" style="display: inline-flex; width: 200px; height: 200px; text-align: center; font-size: xx-large; margin: 4px; padding: 50px">Content</div>
            <div class="card bg-danger" style="display: inline-flex; width: 200px; height: 200px; text-align: center; font-size: xx-large; margin: 4px; padding: 50px">Content</div>
            <div class="card bg-info" style="display: inline-flex; width: 200px; height: 200px; text-align: center; font-size: xx-large; margin: 4px; padding: 50px">Content</div>
            <div class="card bg-dark" style="display: inline-flex; width: 200px; height: 200px; text-align: center; font-size: xx-large; margin: 4px; padding: 50px">Content</div>
            <div class="card bg-warning" style="display: inline-flex; width: 200px; height: 200px; text-align: center; font-size: xx-large; margin: 4px; padding: 50px">Content</div>
        </div>

    <div class="row" style="padding: 0 100px">
    <div align="center" style="margin: 50px 0 10px 0!important"><h2>New Product List</h2></div>
        <table class="table table-responsive-sm table-hover table-outline mb-0">
            <thead class="thead-light">
            <tr>
                <th class="text-center"><i class="icon-people"></i> Image</th>
                <th>Name</th>
                <th class="text-center">Description</th>
                <th>Price</th>
                <th class="text-center">Commission</th>
                <th>Category</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="text-center">
                    <div class="avatar">
                        <img src="img/avatars/1.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                        <span class="avatar-status badge-success"></span>
                    </div>
                </td>
                <td>
                    <div>Yiorgos Avraamu</div>
                    <div class="small text-muted">
                        <span>New</span> | Registered: Jan 1, 2015
                    </div>
                </td>
                <td class="text-center">
                    <span>This is a sample description</span>
                </td>
                <td>
                    <strong> &#x20a6;570,000</strong>
                </td>
                <td class="text-center">
                    <strong>40%</strong>
                </td>
                <td>
                    <strong>Gtext Mall</strong>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <div class="avatar">
                        <img src="img/avatars/2.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                        <span class="avatar-status badge-danger"></span>
                    </div>
                </td>
                <td>
                    <div>Avram Tarasios</div>
                    <div class="small text-muted">

                        <span>Recurring</span> | Registered: Jan 1, 2015
                    </div>
                </td>
                <td class="text-center">
                    <span>This is a sample description</span>
                </td>
                <td>
                    <strong> &#x20a6;630,000</strong>
                </td>
                <td class="text-center">
                    <strong>23%</strong>
                </td>
                <td>
                    <strong>Gtext Mall</strong>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <div class="avatar">
                        <img src="img/avatars/3.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                        <span class="avatar-status badge-warning"></span>
                    </div>
                </td>
                <td>
                    <div>Quintin Ed</div>
                    <div class="small text-muted">
                        <span>New</span> | Registered: Jan 1, 2015
                    </div>
                </td>
                <td class="text-center">
                    <span>This is a sample description</span>
                </td>
                <td>
                    <strong> &#x20a6;560,000</strong>
                </td>
                <td class="text-center">
                    <strong>23%</strong>
                </td>
                <td>
                    <strong>Gtext Volunteer</strong>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <div class="avatar">
                        <img src="img/avatars/4.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                        <span class="avatar-status badge-secondary"></span>
                    </div>
                </td>
                <td>
                    <div>Enéas Kwadwo</div>
                    <div class="small text-muted">
                        <span>New</span> | Registered: Jan 1, 2015
                    </div>
                </td>
                <td class="text-center">
                    <span>This is a sample description</span>
                </td>
                <td>
                    <strong> &#x20a6;900,000</strong>
                </td>
                <td class="text-center">
                    <strong>50%</strong>
                </td>
                <td>
                    <strong>Gtext Homes</strong>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <div class="avatar">
                        <img src="img/avatars/5.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                        <span class="avatar-status badge-success"></span>
                    </div>
                </td>
                <td>
                    <div>Agapetus Tadeáš</div>
                    <div class="small text-muted">
                        <span>New</span> | Registered: Jan 1, 2015
                    </div>
                </td>
                <td class="text-center">
                    <span>This is a sample description</span>
                </td>
                <td>
                    <strong> &#x20a6;1,000,000</strong>
                </td>
                <td class="text-center">
                    <strong>34%</strong>
                </td>
                <td>
                    <strong>Gtext Hub</strong>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <div class="avatar">
                        <img src="img/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                        <span class="avatar-status badge-danger"></span>
                    </div>
                </td>
                <td>
                    <div>Friderik Dávid</div>
                    <div class="small text-muted">
                        <span>New</span> | Registered: Jan 1, 2015
                    </div>
                </td>
                <td class="text-center">
                    <span>This is a sample description</span>
                </td>
                <td>
                    <strong> &#x20a6;750,000</strong>
                </td>
                <td class="text-center">
                    <strong>53%</strong>
                </td>
                <td>
                    <strong>Gtext Media</strong>
                </td>
            </tr>
            </tbody>
        </table>

    </div>



@endsection