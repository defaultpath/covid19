<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('admin.layout.head')


<body>
    <div class="container container-fluid full-height">
        <section class="content" id="app">
          
            <div class="row">
                <div class="col-12 text-center">
                    <div class="row m-12">
                        <div class="col-12 text-center ">
                              <img src="{{asset('admin/dist/img/moh.png')}}" alt="User Image" width="200px" height="150px">
                            <h1> Sinaw Hospital </h1>
                            <h4>Investigation & follow-up team</h4>
                                                        <h4>Covid-19</h4>

                        </div>
                        
                     

                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-12">
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>{{\App\Patient::all()->count()}}</h3>
                                    <p>TOTAL</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person"></i>
                                </div>
                                <a href="#" class="small-box-footer">المجموع</a>
                            </div>
                        </div>
                       </div>
                    <div class="row">
                        <div class="col-lg-6 col-6">
                            <div class="small-box bg-gradient-purple">
                                <div class="inner">
                                    <h3>{{\App\Patient::Omani()->count()}}</h3>
                                    <p>Omani</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-flag"></i>
                                </div>
                                <a href="#" class="small-box-footer">عماني</a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-6">
                            <div class="small-box bg-orange">
                                <div class="inner">
                                    <h3>{{\App\Patient::NoOmani()->count()}}</h3>

                                    <p>Non-Omani</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-plane"></i>
                                </div>
                                <a href="#" class="small-box-footer">غير عماني</a>
                            </div>
                        </div>


                        <div class="col-lg-6 col-6">
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>{{\App\Patient::Active()->count()}}</h3>
                                    <p>ACTIVE</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-sad"></i>
                                </div>
                                <a href="#" class="small-box-footer">نشط</a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-6">
                            <div class="small-box bg-gradient-success">
                                <div class="inner">
                                    <h3>{{\App\Patient::Cured()->count()}}</h3>

                                    <p>CURED</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-happy"></i>
                                </div>
                                <a href="#" class="small-box-footer">متعافى</a>
                            </div>
                        </div>


                        <div class="col-lg-6 col-6">
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>{{\App\Patient::bands()->count()}}</h3>
                                    <p>BAND</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-android-warning"></i>
                                </div>
                                <a href="#" class="small-box-footer">إسوارة</a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-6">
                            <!-- small box -->
                            <div class="small-box bg-gradient-dark">
                                <div class="inner">
                                    <h3>{{\App\Patient::Death()->count()}}</h3>

                                    <p>Dead</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-sad-outline"></i>
                                </div>
                                <a href="#" class="small-box-footer">متوفى</a>
                            </div>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header text-center">
                                    <h3 class="card-title">Last Updates</h3>
                                </div>
                                <div class="card-body">
                                    <table id="omani" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Omani</th>
                                                <th>Non-Omani</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach(\App\Patient::all()->sortByDesc('test_date')->groupBy('test_date')
                                            as $date=>$item)
                                            <tr>
                                                <td>{{$date}}</td>
                                                <td>{{$item->where('omani', 1)->count()}}</td>
                                                <td>{{$item->where('omani', 0)->count()}}</td>
                                                <td>{{$item->count()}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
        </section>
        @include('admin.layout.footer')
        <x-datatable id="omani"></x-datatable>
    </div>
<center>
    <footer class="footer">
        فكرة وإخراج :
        <strong>  ناصر بن سيف الراشدي 
    </strong>
       فريق التقصي والمتابعة
    </footer>
    </center>
    <br>    <br>
    <br>

</body>

</html>
