@extends('layouts.app')

@section('page-header')
    @include('layouts.components.pageheader', [
            'headerIcon'  => 'fa fa-file-text',
            'headerTitle'       => 'Fatura',
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

    <div class="panel">

        <div class="panel-body p-a-4 b-b-4 bg-white darken">
            <div class="box m-a-0 border-radius-0 bg-white darken">
                <div class="box-row valign-middle">

                    <div class="box-cell col-md-8">
                        <div class="display-inline-block px-demo-brand px-demo-brand-lg valign-middle">
                            <span class="px-demo-logo m-y-0 m-r-2 bg-primary"><span class="px-demo-logo-1"></span><span class="px-demo-logo-2"></span><span class="px-demo-logo-3"></span><span class="px-demo-logo-4"></span><span class="px-demo-logo-5"></span><span class="px-demo-logo-6"></span><span class="px-demo-logo-7"></span><span class="px-demo-logo-8"></span><span class="px-demo-logo-9"></span></span>
                        </div>

                        <div class="display-inline-block m-r-3 valign-middle">
                            <div class="text-muted"><strong>{{ config('app.name') }}</strong></div>
                            <div class="font-size-18 font-weight-bold line-height-1">INVOICE #244</div>
                        </div>

                        <!-- Spacer -->
                        <div class="m-t-3 visible-xs visible-sm"></div>

                        <div class="display-inline-block p-l-1 b-l-3 valign-middle font-size-12 text-muted">
                            <div>{{ config('app.name') }}</div>
                            <div>330 North Brand Boulevard</div>
                            <div>Glendale, CA 91203, USA</div>
                        </div>
                    </div>

                    <!-- Spacer -->
                    <div class="m-t-3 visible-xs visible-sm"></div>

                    <div class="box-cell col-md-4">
                        <div class="pull-md-right font-size-15">
                            <div class="text-muted font-size-13 line-height-1"><strong>Date</strong></div>
                            <strong>June 21, 2016</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel-body p-a-4 bg-white b-b-2">
            <div class="box m-a-0 border-radius-0">
                <div class="box-row valign-middle">
                    <div class="box-cell col-md-6 font-size-14">
                        <div><strong>Mr. John Smith</strong></div>
                        <div>New York, Pass Avenue, 109</div>
                        <div>10012 NY, USA</div>
                    </div>

                    <!-- Spacer -->
                    <div class="m-t-3 visible-xs visible-sm"></div>

                    <div class="box-cell col-md-6 bg-white darken p-x-3 p-y-2">
                        <div class="pull-xs-left m-y-1 font-size-12 text-muted"><strong>TOTAL:</strong></div>
                        <div class="pull-xs-right font-size-24"><strong>$4,657.75</strong></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel-body p-a-4">
            <div class="table-responsive">
                <table class="table m-a-0">
                    <thead>
                    <tr class="bg-white darken">
                        <th class="p-x-2">
                            Task description
                        </th>
                        <th class="p-x-2">
                            Rate
                        </th>
                        <th class="p-x-2">
                            Hours
                        </th>
                        <th class="p-x-2">
                            Line total
                        </th>
                    </tr>
                    </thead>
                    <tbody class="font-size-14">
                    <tr>
                        <td class="p-a-2">
                            <div class="font-weight-semibold">Website design and development</div>
                            <div class="font-size-12 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</div>
                        </td>
                        <td class="p-a-2">
                            <strong>$50.00</strong>
                        </td>
                        <td class="p-a-2">
                            <strong>50</strong>
                        </td>
                        <td class="p-a-2">
                            <strong>$2,500.00</strong>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-a-2">
                            <div class="font-weight-semibold">Branding</div>
                            <div class="font-size-12 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</div>
                        </td>
                        <td class="p-a-2">
                            <strong>$47.95</strong>
                        </td>
                        <td class="p-a-2">
                            <strong>45</strong>
                        </td>
                        <td class="p-a-2">
                            <strong>$2,157.75</strong>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
