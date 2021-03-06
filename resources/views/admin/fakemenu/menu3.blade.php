@extends('layouts.app')

@section('page-header')
    @include('layouts.components.pageheader', [
            'headerIcon'  => 'fa fa-area-chart',
            'headerTitle'       => 'Widgets',
            'breadcrumbs' => [
                // ['name' => 'UI', 'url' => route('admin.dashboard')],
                // ['name' => 'UcasdasdI', 'url' => route('admin.dashboard')],
                // ['name' => 'hjfghj fghj ', 'url' => route('admin.dashboard')],
            ],
            'tabs' => [
                // ['name' => 'Profile', 'id' => 'profile'],
                // ['name' => 'Password', 'id' => 'password'],
                // ['name' => 'Notifications', 'id' => 'notifications'],
            ]
        ])
@endsection

@section('content')

    <!-- Profile widget -->

    <div class="row">
        <div class="col-md-4">

            <!-- Links -->
            <div class="panel panel-success panel-dark widget-profile">
                <div class="panel-heading">
                    <img src="assets/demo/avatars/2.jpg" alt="" class="widget-profile-avatar">
                    <h3 class="widget-profile-header">
                        Robert Jang
                        <span class="widget-profile-secondary-text">email@example.com</span>
                    </h3>
                    <i class="widget-profile-bg-icon ion-ios-clock-outline"></i>
                </div>
                <div class="list-group">
                    <a href="#" class="list-group-item"><i class="fa fa-envelope-o list-group-icon"></i>Inbox messages<span class="badge badge-info">14</span></a>
                    <a href="#" class="list-group-item"><i class="fa fa-tasks list-group-icon"></i>Uncompleted tasks<span class="badge badge-warning">7</span></a>
                    <a href="#" class="list-group-item"><i class="fa fa-bell-o list-group-icon"></i>New notifications<span class="badge badge-danger">11</span></a>
                    <a href="#" class="list-group-item">Account settings</a>
                </div>
            </div>

        </div>
        <div class="col-md-4">

            <!-- Counters -->
            <div class="panel panel-info panel-dark widget-profile">
                <div class="panel-heading">
                    <img src="assets/demo/avatars/3.jpg" alt="" class="widget-profile-avatar">
                    <h3 class="widget-profile-header">
                        Michelle Bortz
                        <a href="#" class="widget-profile-secondary-text">https://twitter.com/mbortz</a>
                    </h3>
                    <i class="widget-profile-bg-icon ion-social-twitter-outline"></i>
                </div>
                <div class="widget-profile-counters">
                    <a href="#" class="col-xs-4">
                        <span class="widget-profile-counter">131</span>
                        TWEETS
                    </a>
                    <a href="#" class="col-xs-4">
                        <span class="widget-profile-counter">230</span>
                        FOLLOWERS
                    </a>
                    <a href="#" class="col-xs-4">
                        <span class="widget-profile-counter">56</span>
                        FOLLOWING
                    </a>
                </div>
                <input type="text" placeholder="Write your tweet" class="form-control input-lg widget-profile-input">
                <div class="panel-footer">Lorem ipsum dolor sit amet</div>
            </div>

        </div>
        <div class="col-md-4">

            <!-- Centered -->
            <div class="panel panel-danger panel-dark panel-body-colorful widget-profile widget-profile-centered">
                <div class="panel-heading">
                    <img src="assets/demo/avatars/1.jpg" alt="" class="widget-profile-avatar">
                    <h3 class="widget-profile-header">
                        John Doe
                        <a href="#" class="widget-profile-secondary-text">https://twitter.com/jdoe</a>
                    </h3>
                </div>
                <div class="panel-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
            </div>

        </div>
    </div>

    <!-- / Profile widget -->

    <!-- Rating widget -->

    <div class="panel">
        <div class="panel-heading">
            <span class="panel-title">Rating</span>
        </div>

        <div class="panel-body">

            <div class="widget-rating" style="font-size: 16px">
                <input type="radio" value="5" name="widget-rating-1" id="widget-rating-1_star-5">
                <label for="widget-rating-1_star-5"><i class="fa fa-star"></i></label>

                <input type="radio" value="4" name="widget-rating-1" id="widget-rating-1_star-4">
                <label for="widget-rating-1_star-4"><i class="fa fa-star"></i></label>

                <input type="radio" value="3" name="widget-rating-1" id="widget-rating-1_star-3">
                <label for="widget-rating-1_star-3"><i class="fa fa-star"></i></label>

                <input type="radio" value="2" name="widget-rating-1" id="widget-rating-1_star-2">
                <label for="widget-rating-1_star-2"><i class="fa fa-star"></i></label>

                <input type="radio" value="1" name="widget-rating-1" id="widget-rating-1_star-1">
                <label for="widget-rating-1_star-1"><i class="fa fa-star"></i></label>
            </div>

        </div>
    </div>

    <!-- / Rating widget -->

    <!-- Products widget -->

    <div class="panel">
        <div class="panel-heading">
            <span class="panel-title">Products</span>
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="widget-products-item col-xs-12 col-sm-6 col-md-4 col-xl-3">
                    <a href="#" class="widget-products-image">
                        <img src="https://picsum.photos/500/333/?random&{{rand()}}">
                    </a>
                    <a href="#" class="widget-products-title">Default</a>
                    <div class="widget-products-footer text-muted">
                        <i class="fa fa-shopping-cart"></i> 1,121
                        <i class="fa fa-thumbs-up p-l-1"></i> 2,423
                        <i class="fa fa-comments p-l-1"></i> 523
                    </div>
                </div>

                <div class="widget-products-item col-xs-12 col-sm-6 col-md-4 col-xl-3">
                    <a href="#" class="widget-products-image">
                        <img src="https://picsum.photos/500/333/?random&{{rand()}}">
                        <span class="widget-products-overlay"></span>
                    </a>
                    <a href="#" class="widget-products-title">
                        With overlay
                        <span class="widget-products-price label label-tag label-success pull-xs-right">$22</span>
                    </a>
                    <div class="widget-products-footer text-muted">
                        by <a href="#">John Doe</a> in <a href="#">Creative</a>
                    </div>
                </div>

                <div class="widget-products-item col-xs-12 col-sm-6 col-md-4 col-xl-3">
                    <a href="#" class="widget-products-title">
                        With inverted overlay
                        <span class="widget-products-price label label-pill label-primary pull-xs-right">$22</span>
                    </a>
                    <a href="#" class="widget-products-image">
                        <img src="https://picsum.photos/500/333/?random&{{rand()}}">
                        <span class="widget-products-overlay inverted"></span>
                        <span class="label label-ribbon right label-danger font-size-13"><strong>NEW</strong></span>
                    </a>
                    <div class="widget-products-footer text-muted">
                        <i class="fa fa-shopping-cart"></i> 1,121
                        <i class="fa fa-thumbs-up p-l-1"></i> 2,423
                        <i class="fa fa-comments p-l-1"></i> 523
                    </div>
                </div>

                <div class="widget-products-item col-xs-12 col-sm-6 col-md-4 col-xl-3">
                    <a href="#" class="widget-products-title">With overlay and content</a>
                    <a href="#" class="widget-products-image">
                        <img src="https://picsum.photos/500/333/?random&{{rand()}}">
                        <span class="widget-products-overlay inverted">
                <span class="widget-products-overlay-content-middle">
                  <div class="widget-products-overlay-content-inner">
                    <span class="col-xs-6 p-l-3"><button type="button" class="btn btn-lg btn-block p-x-0 b-a-0">Detail</button></span>
                    <span class="col-xs-6 p-r-3"><button type="button" class="btn btn-lg btn-primary btn-block p-x-0 b-a-0">Preview</button></span>
                  </div>
                </span>
              </span>
                    </a>
                </div>
            </div>

        </div>
    </div>

    <!-- / Products widget -->

    <!-- Maps widget -->

    <div class="panel">
        <div class="panel-heading">
            <span class="panel-title">Google Maps</span>
        </div>
        <div class="panel-body" style="position:relative;height: 600px;">
            <div class="widget-maps" id="widget-maps-example"></div>
        </div>
    </div>

    <!-- / Maps widget -->

    <script>
        _init.push(function() {
            // Google Maps docs - https://developers.google.com/maps/documentation/javascript/examples/map-simple
            new google.maps.Map(document.getElementById('widget-maps-example'), {
                zoom: 11,
                center: {lat: -34.397, lng: 150.644}
            });
        });
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCHtdj4L66c05v1UZm-nte1FzUEAN6GKBI&callback=initMap&sensor=false" async defer></script>

@endsection
