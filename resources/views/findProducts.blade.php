@extends('master')
@section('main')
    <div class="row">
        <div style="margin: 30px 0 10px 0!important; text-align: center" align="center"><h2>Your Statistics </h2></div><br />
    </div>
    <div class="row">
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
            <!--/.social-box-->
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
            <!--/.social-box-->
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
            <!--/.social-box-->
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
            <!--/.social-box-->
        </div>

        <div style="margin: 30px 0 10px 0!important; text-align: center" align="center"><h2>Product List</h2></div>
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
                    <img src="img/flags/USA.png" alt="USA" style="height:24px;">
                </td>
                <td>
                    <div class="clearfix">
                        <div class="float-left">
                            <strong>50%</strong>
                        </div>
                        <div class="float-right">
                            <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                        </div>
                    </div>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </td>
                <td class="text-center">
                    <i class="fa fa-cc-mastercard" style="font-size:24px"></i>
                </td>
                <td>
                    <div class="small text-muted">Last login</div>
                    <strong>10 sec ago</strong>
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
                    <img src="img/flags/Brazil.png" alt="Brazil" style="height:24px;">
                </td>
                <td>
                    <div class="clearfix">
                        <div class="float-left">
                            <strong>10%</strong>
                        </div>
                        <div class="float-right">
                            <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                        </div>
                    </div>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </td>
                <td class="text-center">
                    <i class="fa fa-cc-visa" style="font-size:24px"></i>
                </td>
                <td>
                    <div class="small text-muted">Last login</div>
                    <strong>5 minutes ago</strong>
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
                    <img src="img/flags/India.png" alt="India" style="height:24px;">
                </td>
                <td>
                    <div class="clearfix">
                        <div class="float-left">
                            <strong>74%</strong>
                        </div>
                        <div class="float-right">
                            <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                        </div>
                    </div>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 74%" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </td>
                <td class="text-center">
                    <i class="fa fa-cc-stripe" style="font-size:24px"></i>
                </td>
                <td>
                    <div class="small text-muted">Last login</div>
                    <strong>1 hour ago</strong>
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
                    <img src="img/flags/France.png" alt="France" style="height:24px;">
                </td>
                <td>
                    <div class="clearfix">
                        <div class="float-left">
                            <strong>98%</strong>
                        </div>
                        <div class="float-right">
                            <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                        </div>
                    </div>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 98%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </td>
                <td class="text-center">
                    <i class="fa fa-paypal" style="font-size:24px"></i>
                </td>
                <td>
                    <div class="small text-muted">Last login</div>
                    <strong>Last month</strong>
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
                    <img src="img/flags/Spain.png" alt="Spain" style="height:24px;">
                </td>
                <td>
                    <div class="clearfix">
                        <div class="float-left">
                            <strong>22%</strong>
                        </div>
                        <div class="float-right">
                            <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                        </div>
                    </div>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </td>
                <td class="text-center">
                    <i class="fa fa-google-wallet" style="font-size:24px"></i>
                </td>
                <td>
                    <div class="small text-muted">Last login</div>
                    <strong>Last week</strong>
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
                    <img src="img/flags/Poland.png" alt="Poland" style="height:24px;">
                </td>
                <td>
                    <div class="clearfix">
                        <div class="float-left">
                            <strong>43%</strong>
                        </div>
                        <div class="float-right">
                            <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                        </div>
                    </div>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </td>
                <td class="text-center">
                    <i class="fa fa-cc-amex" style="font-size:24px"></i>
                </td>
                <td>
                    <div class="small text-muted">Last login</div>
                    <strong>Yesterday</strong>
                </td>
            </tr>
            </tbody>
        </table>

    </div>



@endsection