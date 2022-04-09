<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- Bootstrap CSS -->
       <link rel="stylesheet" href="{{ asset('admin_assets/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('admin_assets/css/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('admin_assets/css/style1.css') }}" />
        <link rel="stylesheet" href="{{ asset('admin_assets/css/font-awesome.min.css')}}" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>Laravel Test</title>
    </head>
    <body>
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2 sidebar">
                        <div class="black-card">
                            
@include('admin.layout.side_nav')