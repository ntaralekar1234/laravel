<x-layout class="dashboard" id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    {{-- Dashboard --}}
    <div class="wrapper">
        {{-- Header --}}
        <x-superadmin.header/>
        <div id="content" class="survey-com content-wrapper">
            {{-- Navigation --}}
            <x-superadmin.navigation/>
             {{-- Main Content --}}
            <div class="survey-com content-manger">
                <div class="survey-com wrapper-block pb-0">
                    <div class="container-fluid">
                        <div class="survey-com super-dashboard ">
                        
                            <!-- ============= row 1 ========= -->
                            <div class="survey-com card-design mb-3">
                                <div class="row mb-0">
                                    <!-- ============= CP ========= -->
                                    <div class="col col-md-5 col-12">
                                        <div class="dash-heading mb-2">
                                            <h4>Channel Partner</h4>
                                        </div>
                                        <div class="survey-com userprofile-container dash-details bg-white detailview-comman mb-2">
                                            <div class="survey-com">
                                                <div class="row m-0">
                                                    <div class="col col-md-6 px-0">
                                                        <div class="py-2 border-bottom border-right px-3">
                                                        <a href="">
                                                            <div class="row align-center">
                                                                <div class="col">
                                                                    <span class="py-2"><strong>Online</strong></span>
                                                                </div>
                                                                <div class="col col-auto"><strong>43</strong></div>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="py-2 border-bottom border-right px-3">
                                                        <a href="">
                                                            <div class="row align-center">
                                                                <div class="col">
                                                                    <span class="py-2"><strong>Offline</strong></span>
                                                                </div>
                                                                <div class="col col-auto"><strong>34</strong></div>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="py-2 border-bottom border-right px-3">
                                                        <a href="">
                                                            <div class="row align-center">
                                                                <div class="col">
                                                                    <span class="py-2"><strong>Blocked</strong></span>
                                                                </div>
                                                                <div class="col col-auto"><strong>45</strong></div>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="py-2 border-bottom border-right px-3 bg-light">
                                                        <a href="">
                                                            <div class="row align-center">
                                                                <div class="col">
                                                                    <span class="py-2"><strong>Registered CP</strong></span>
                                                                </div>
                                                                <div class="col col-auto"><strong>435</strong></div>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="py-2 border-bottom border-right px-3 bg-light">
                                                        <a href="">
                                                            <div class="row align-center">
                                                                <div class="col">
                                                                    <span class="py-2"><strong>Pending Profile Approvals</strong></span>
                                                                </div>
                                                                <div class="col col-auto"><strong>324</strong></div>
                                                            </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col col-md-6 px-0">
                                                        <div class="mx-auto" style="width:240px;">
                                                            <canvas id="cpChart" width="100%" height="100%"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ============= User ========= -->
                                    <div class="col col-md-5 col-12">
                                        <div class="dash-heading mb-2">
                                            <h4>Users</h4>
                                        </div>
                                        <div class="survey-com userprofile-container dash-details bg-white detailview-comman mb-2">
                                            <div class="survey-com">
                                                <div class="row m-0">
                                                    <div class="col col-md-6 px-0">
                                                        <div class="py-2 border-bottom border-right px-3">
                                                        <a href="">
                                                            <div class="row align-center">
                                                                <div class="col">
                                                                    <span class="py-2"><strong>Active</strong></span>
                                                                </div>
                                                                <div class="col col-auto"><strong>435</strong></div>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="py-2 border-bottom border-right px-3">
                                                        <a href="">
                                                            <div class="row align-center">
                                                                <div class="col">
                                                                    <span class="py-2"><strong>Inactive</strong></span>
                                                                </div>
                                                                <div class="col col-auto"><strong>564</strong></div>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="py-2 border-bottom border-right px-3">
                                                        <a href="">
                                                            <div class="row align-center">
                                                                <div class="col">
                                                                    <span class="py-2"><strong>Blocked</strong></span>
                                                                </div>
                                                                <div class="col col-auto"><strong>454</strong></div>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="py-2 border-bottom border-right px-3 bg-light">
                                                        <a href="">
                                                            <div class="row align-center">
                                                                <div class="col">
                                                                    <span class="py-2"><strong>Registered</strong></span>
                                                                </div>
                                                                <div class="col col-auto"><strong>43234</strong></div>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="py-2 border-bottom border-right px-3 bg-light">
                                                            <a href="">
                                                                <div class="row align-center">
                                                                    <div class="col">
                                                                        <span class="py-2">
                                                                            <strong>Android</strong>
                                                                        </span>
                                                                    </div>
                                                                    <div class="col col-auto">
                                                                        <strong>324</strong>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="py-2 border-bottom border-right px-3 bg-light">
                                                            <a href="">
                                                                <div class="row align-center">
                                                                    <div class="col">
                                                                        <span class="py-2">
                                                                            <strong>IOS</strong>
                                                                        </span>
                                                                    </div>
                                                                    <div class="col col-auto">
                                                                        <strong>423</strong>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="py-2 border-bottom border-right px-3 bg-light">
                                                            <a href="">
                                                                <div class="row align-center">
                                                                    <div class="col">
                                                                        <span class="py-2">
                                                                            <strong>Web</strong>
                                                                        </span>
                                                                    </div>
                                                                    <div class="col col-auto">
                                                                        <strong>324</strong>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col col-md-6 px-0">
                                                        <div class="mx-auto" style="width:240px;">
                                                            <canvas id="userChart" width="100%" height="100%"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ============= Promotions ========= -->
                                    <div class="col col-md-2 col-12">
                                        <div class="dash-heading mb-2">
                                            <h4>Super Admin</h4>
                                        </div>
                                        <div class="survey-com userprofile-container dash-details bg-white detailview-comman mb-2">
                                            <div class="survey-com">
                                                <div class="border-bottom border-right bord-padd px-3">
                                                <a href="">
                                                    <div class="row align-center">
                                                        <div class="col">
                                                            <span class="py-2"><strong>No. of Surveyor</strong></span>
                                                        </div>
                                                        <div class="col col-auto"><strong>423</strong></div>
                                                    </div>
                                                    </a>
                                                </div>
                                                <div class="border-bottom border-right bord-padd px-3">
                                                <a href="">
                                                    <div class="row align-center">
                                                        <div class="col">
                                                            <span class="py-2"><strong>No. of Surveys</strong></span>
                                                        </div>
                                                        <div class="col col-auto"><strong>234</strong></div>
                                                    </div>
                                                    </a>
                                                </div>
                                                <div class="border-bottom border-right bord-padd px-3">
                                                <a href="">
                                                    <div class="row align-center">
                                                        <div class="col">
                                                            <span class="py-2"><strong>Completed Surveys</strong></span>
                                                        </div>
                                                        <div class="col col-auto"><strong>3242</strong></div>
                                                    </div>
                                                    </a>
                                                </div>
                                                <div class="border-bottom border-right bord-padd px-3 bg-light">
                                                <a href="">
                                                    <div class="row align-center">
                                                        <div class="col">
                                                            <span class="py-2"><strong>Pending Surveys</strong></span>
                                                        </div>
                                                        <div class="col col-auto"><strong>324</strong></div>
                                                    </div>
                                                    </a>
                                                </div>
                                                <div class="border-bottom border-right bord-padd px-3 bg-light">
                                                <a href="">
                                                    <div class="row align-center">
                                                        <div class="col">
                                                            <span class="py-2"><strong>Approval Pending</strong></span>
                                                        </div>
                                                        <div class="col col-auto"><strong>324</strong></div>
                                                    </div>
                                                    </a>
                                                </div>
                                                <div class="border-bottom border-right bord-padd px-3 bg-light">
                                                <a href="">
                                                    <div class="row align-center">
                                                        <div class="col">
                                                            <span class="py-2"><strong>No. Of Leads</strong></span>
                                                        </div>
                                                        <div class="col col-auto"><strong>324</strong></div>
                                                    </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============= row 2 ========= -->
                            <div class="survey-com card-design mb-3">
                                <div class="row mb-0">
                                    <div class="col col-md-6 col-12">
                                        <!-- <div class="dash-heading mb-2">
                                            <h4>Channel Partner</h4>
                                        </div> -->
                                        <div class="survey-com userprofile-container dash-details bg-white detailview-comman mb-2">
                                            <div class="survey-com">
                                            <table class="table table-bordered mb-0">
                                                <thead>
                                                    <tr class="bg-light">
                                                        <th rowspan="2">Category</th>      	
                                                        <th colspan="2" class="text-center">Appointment Count</th>
                                                        <th colspan="2" class="text-center">Gross Earning</th>      	
                                                        <th colspan="2" class="text-center">Revenue</th>
                                                    </tr>
                                                    <tr class="bg-light">
                                                        <th class="text-center">Today</th>  
                                                        <th class="text-center">Avg-30 Day</th>  
                                                        <th class="text-center">Today</th>  
                                                        <th class="text-center">Avg-30 Day</th>  
                                                        <th class="text-center">Today</th>  
                                                        <th class="text-center">Avg-30 Day</th>  
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="">Upcoming</a></td>
                                                        <td class="text-center">324</td>
                                                        <td class="text-center">-</td>
                                                        <td class="text-center">324</td>
                                                        <td class="text-center">-</td>
                                                        <td class="text-center">42</td>
                                                        <td class="text-center">-</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="">Ongoing</a></td>
                                                        <td class="text-center">234</td>
                                                        <td class="text-center">-</td>
                                                        <td class="text-center">4</td>
                                                        <td class="text-center">-</td>
                                                        <td class="text-center">324</td>
                                                        <td class="text-center">-</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="">Completed</a></td>
                                                        <td class="text-center">23</td>
                                                        <td class="text-center">23</td>
                                                        <td class="text-center">234</td>
                                                        <td class="text-center">234</td>
                                                        <td class="text-center">234</td>
                                                        <td class="text-center">234</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="">Rejected</a></td>
                                                        <td class="text-center">43</td>
                                                        <td class="text-center">43</td>
                                                        <td class="text-center">42</td>
                                                        <td class="text-center">432</td>
                                                        <td class="text-center">324</td>
                                                        <td class="text-center">324</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="">Cancelled</a></td>
                                                        <td class="text-center">23</td>
                                                        <td class="text-center">23</td>
                                                        <td class="text-center">42</td>
                                                        <td class="text-center">423</td>
                                                        <td class="text-center">24</td>
                                                        <td class="text-center">24</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:void(0)">Cancellation Charges</a></td>
                                                        <td class="text-center">23</td>
                                                        <td class="text-center">432</td>
                                                        <td class="text-center">324</td>
                                                        <td class="text-center">324</td>
                                                        <td class="text-center">-</td>
                                                        <td class="text-center">-</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="">Online Payments</a></td>
                                                        <td class="text-center">32</td>
                                                        <td class="text-center">32</td>
                                                        <td class="text-center">324</td>
                                                        <td class="text-center">34</td>
                                                        <td class="text-center">-</td>
                                                        <td class="text-center">-</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            </div>
                                        </div>
                                    </div>
                    
                                    <!-- ============= Appointment Platform ========= -->
                                    <div class="col col-md-2 col-12">
                                        <div class="dash-heading mb-2">
                                            <h4>Appointment Platform</h4>
                                        </div>
                                        <div class="survey-com userprofile-container dash-details bg-white detailview-comman minheight mb-2">
                                            <div class="survey-com">
                                                <div class="py-2 border-bottom border-right px-3">
                                                <a href="">
                                                    <div class="row align-center">
                                                        <div class="col">
                                                            <span class="py-2"><strong>Android</strong></span>
                                                        </div>
                                                        <div class="col col-auto"><strong>532</strong></div>
                                                    </div>
                                                    </a>
                                                </div>
                                                <div class="py-2 border-bottom border-right px-3">
                                                <a href="">
                                                    <div class="row align-center">
                                                        <div class="col">
                                                            <span class="py-2"><strong>IOS</strong></span>
                                                        </div>
                                                        <div class="col col-auto"><strong>53</strong></div>
                                                    </div>
                                                    </a>
                                                </div>
                                                <div class="py-2 border-bottom border-right px-3">
                                                <a href="">
                                                    <div class="row align-center">
                                                        <div class="col">
                                                            <span class="py-2"><strong>Web</strong></span>
                                                        </div>
                                                        <div class="col col-auto"><strong>34</strong></div>
                                                    </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-md-2 col-12">
                                        <div class="dash-heading mb-2">
                                            <h4>Promotions</h4>
                                        </div>
                                        <div class="survey-com userprofile-container dash-details bg-white detailview-comman minheight mb-2">
                                            <div class="survey-com">
                                                <div class="py-2 border-bottom border-right px-3">
                                                <a href="">
                                                    <div class="row align-center">
                                                        <div class="col">
                                                            <span class="py-2"><strong>Active</strong></span>
                                                        </div>
                                                        <div class="col col-auto"><strong>34</strong></div>
                                                    </div>
                                                    </a>
                                                </div>
                                                <div class="py-2 border-bottom border-right px-3">
                                                <a href="">
                                                    <div class="row align-center">
                                                        <div class="col">
                                                            <span class="py-2"><strong>Upcoming</strong></span>
                                                        </div>
                                                        <div class="col col-auto"><strong>4324</strong></div>
                                                    </div>
                                                    </a>
                                                </div>
                                                <div class="py-2 border-bottom border-right px-3">
                                                <a href="">
                                                    <div class="row align-center">
                                                        <div class="col">
                                                            <span class="py-2"><strong>Expired</strong></span>
                                                        </div>
                                                        <div class="col col-auto"><strong>324</strong></div>
                                                    </div>
                                                    </a>
                                                </div>
                                                <div class="py-2 border-bottom border-right px-3 bg-light">
                                                <a href="">
                                                    <div class="row align-center">
                                                        <div class="col">
                                                            <span class="py-2"><strong>Total</strong></span>
                                                        </div>
                                                        <div class="col col-auto"><strong>234</strong></div>
                                                    </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-md-2 col-12">
                                        <div class="dash-heading mb-2">
                                            <h4>Reward Points</h4>
                                        </div>
                                        <div class="survey-com userprofile-container dash-details bg-white detailview-comman minheight mb-2">
                                            <div class="survey-com">
                                                <div class="py-2 border-bottom border-right px-3 bg-light">
                                                    <div class="row align-center">
                                                        <div class="col">
                                                            <span class="text-darkpy-2"><strong>Type</strong></span>
                                                        </div>
                                                        <div class="col col-auto">
                                                            <span class="text-darkpy-2"><strong>Count</strong></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="py-2 border-bottom border-right px-3">
                                                <a href="javascript:void(0)">
                                                    <div class="row align-center">
                                                        <div class="col">
                                                            <span class="py-2"><strong>Balance Remaining</strong></span>
                                                        </div>
                                                        <div class="col col-auto"><strong>324324</strong></div>
                                                    </div>
                                                    </a>
                                                </div>
                                                <div class="py-2 border-bottom border-right px-3">
                                                <a href="javascript:void(0)">
                                                    <div class="row align-center">
                                                        <div class="col">
                                                            <span class="py-2"><strong>Redeemed</strong></span>
                                                        </div>
                                                        <div class="col col-auto"><strong>32324</strong></div>
                                                    </div>
                                                    </a>
                                                </div>
                                                <div class="py-2 border-bottom border-right px-3">
                                                <a href="<?php //echo base_url()?>Payments">
                                                    <div class="row align-center">
                                                        <div class="col">
                                                            <span class="py-2"><strong>Expired</strong></span>
                                                        </div>
                                                        <div class="col col-auto"><strong>32423</strong></div>
                                                    </div>
                                                    </a>
                                                </div>
                                                <div class="py-2 border-bottom border-right px-3 bg-light">
                                                <a href="javascript:void(0)">
                                                    <div class="row align-center">
                                                        <div class="col">
                                                            <span class="py-2"><strong>Total</strong></span>
                                                        </div>
                                                        <div class="col col-auto"><strong>423</strong></div>
                                                    </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============= row 3 ========= -->
                            <div class="survey-com card-design mb-3">
                                <div class="row mb-0">
                                    <!-- ============= Business Head ========= -->
                                    <div class="col col-md-6 col-12">
                                        <div class="survey-com userprofile-container dash-details bg-white detailview-comman mb-2">
                                            <div class="survey-com">
                                                <div class="row m-0">
                                                    <div class="col col-md-6 px-0">
                                                        <div class="py-2 border-bottom border-right px-3 bg-light">
                                                            <div class="row align-center">
                                                                <div class="col">
                                                                    <span class="text-dark py-2"><strong>Business Head</strong></span>
                                                                </div>
                                                                <div class="col col-auto">
                                                                    <span class="text-dark py-2 text-right"><strong>Amount</strong></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="py-2 border-bottom border-right px-3">
                                                            <div class="row align-center">
                                                                <div class="col">
                                                                    <span class="py-2"><strong>Achieved Business</strong></span>
                                                                </div>
                                                                <div class="col col-auto"><strong>23234</strong></div>
                                                            </div>
                                                        </div>
                                                        <div class="py-2 border-bottom border-right px-3">
                                                            <div class="row align-center">
                                                                <div class="col">
                                                                    <span class="py-2"><strong>Lost Business</strong></span>
                                                                </div>
                                                                <div class="col col-auto"><strong>234324</strong></div>
                                                            </div>
                                                        </div>
                                                        <div class="py-2 border-bottom border-right px-3">
                                                            <div class="row align-center">
                                                                <div class="col">
                                                                    <span class="py-2"><strong>Balance Forecast</strong></span>
                                                                </div>
                                                                <div class="col col-auto"><strong>234234</strong></div>
                                                            </div>
                                                        </div>
                                                        <div class="py-2 border-bottom border-right px-3 bg-light">
                                                            <div class="row align-center">
                                                                <div class="col">
                                                                    <span class="py-2"><strong>Business Forecast</strong></span>
                                                                </div>
                                                                <div class="col col-auto"><strong>423</strong></div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                    
                                                    <div class="col col-md-6 px-0">
                                                        <div class="mx-auto" style="width:240px;">
                                                            <canvas id="bussChart" width="100%" height="100%"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- ============= Avg Business Head ========= -->
                                    <div class="col col-md-6 col-12">
                                        <div class="survey-com userprofile-container dash-details bg-white detailview-comman mb-2">
                                            <div class="survey-com">
                                                <div class="row m-0">
                                                    <div class="col col-md-6 px-0">
                                                        <div class="py-2 border-bottom border-right px-3 bg-light">
                                                            <div class="row align-center">
                                                                <div class="col">
                                                                    <span class="text-dark py-2"><strong>Avg Business Head</strong></span>
                                                                </div>
                                                                <div class="col col-auto">
                                                                    <span class="text-dark py-2 text-right"><strong>Amount</strong></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="py-2 border-bottom border-right px-3">
                                                            <div class="row align-center">
                                                                <div class="col">
                                                                    <span class="py-2"><strong>Achieved Business</strong></span>
                                                                </div>
                                                                <div class="col col-auto"><strong>2332</strong></div>
                                                            </div>
                                                        </div>
                                                        <div class="py-2 border-bottom border-right px-3">
                                                            <div class="row align-center">
                                                                <div class="col">
                                                                    <span class="py-2"><strong>Lost Business</strong></span>
                                                                </div>
                                                                <div class="col col-auto"><strong>12213</strong></div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="py-2 border-bottom border-right px-3 bg-light">
                                                            <div class="row align-center">
                                                                <div class="col">
                                                                    <span class="py-2"><strong>Business Forecast</strong></span>
                                                                </div>
                                                                <div class="col col-auto"><strong>3123</strong></div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="col col-md-6 px-0">
                                                        <div class="mx-auto" style="width:240px;">
                                                            <canvas id="avgbussChart" width="100%" height="100%"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                        <!-- ============= row 2 ========= -->
                            <div class="survey-com card-design mb-3">
                                <div class="row mb-0">
                                    <div class="col col-md-12 col-12">
                                        <!-- <div class="dash-heading mb-2">
                                            <h4>Channel Partner</h4>
                                        </div> -->
                                        <div class="survey-com userprofile-container dash-details bg-white detailview-comman mb-2">
                                            <div class="survey-com">
                                            <table class="table table-bordered mb-0 admin_history">
                                                <thead>
                                                    <tr class="bg-light">
                                                        <th>Perform By User</th>      	
                                                        <th class="text-center position-relative">Description Of Action <a href="" style="position:absolute; right:2%;top:50%;transform: translateY(-50%);">view all</a></th>
                                                        <th class="text-center">Date and Time</th>      	
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                            </div>
                                        </div>
                                    </div>
                    
                        </div>
                        
                        
                        <!-- Data not Available design -->
                        {{-- <div class="survey-com datanot-div text-center d-flex align-items-center">
                            <img src="{{ asset('images/salon-logo-tr-300.png')}}" alt="logo" />
                        </div> --}}
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>