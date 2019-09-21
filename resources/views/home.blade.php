@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-5">
        <div class="col-3 p-5">
            <img src="https://instagram.fcbr1-1.fna.fbcdn.net/vp/513a93ee83379b411df3f50ba198dc82/5E038B38/t51.2885-19/s150x150/22709172_932712323559405_7810049005848625152_n.jpg?_nc_ht=instagram.fcbr1-1.fna.fbcdn.net" alt="Profile Picture" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div>
                <h1>{{$user->username}}</h1>
                <div class="d-flex mb-3">
                    <div class="pr-5"><strong>216</strong> posts</div>
                    <div class="pr-5"><strong>30.8k</strong> followers</div>
                    <div class="pr-5"><strong>231</strong> following</div>
                </div>
                <div class="font-weight-bold">
                    freeCodeCamp.org
                </div>
                <div>
                    We're a global community of millions of people learning to code together. We're an open source, donor-supported, 501(c)(3) nonprofit.
                </div>
                <div>
                    <a href="www.freecodecamp.org" target="_blank" rel="noopener noreferrer">www.freecodecamp.org</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-4">
            <img src="https://instagram.fcbr1-1.fna.fbcdn.net/vp/a4b635a9e344547e0d280f49aa948efa/5E306F3D/t51.2885-15/e35/c2.0.745.745a/s240x240/69267039_370323360569459_291671647991926479_n.jpg?_nc_ht=instagram.fcbr1-1.fna.fbcdn.net&_nc_cat=111" alt="Image" class="w-100 img-fluid">
        </div>
        <div class="col-4">
            <img src="https://instagram.fcbr1-1.fna.fbcdn.net/vp/5aefb8e888d149ff11b8aa026396cce7/5E055E2F/t51.2885-15/e35/c8.0.733.733a/s240x240/70912760_2344007059199774_5095017444231907_n.jpg?_nc_ht=instagram.fcbr1-1.fna.fbcdn.net&_nc_cat=102" alt="Image" class="w-100 img-fluid">
        </div>
        <div class="col-4">
            <img src="https://instagram.fcbr1-1.fna.fbcdn.net/vp/bf037339eac747ace74c6d1a3f9ff6f5/5E33115A/t51.2885-15/e35/c4.0.742.742a/s150x150/70303910_720240971773212_6266103486872587826_n.jpg?_nc_ht=instagram.fcbr1-1.fna.fbcdn.net&_nc_cat=100" alt="Image" class="w-100 img-fluid">
        </div>
    </div>
</div>
@endsection