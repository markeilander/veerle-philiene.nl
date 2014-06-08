@extends('admin.layout')

@section('content')
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="panel panel-info">
                  <div class="panel-heading">
                    <div class="row">
                      <div class="col-xs-6">
                        <i class="fa fa-user fa-5x"></i>
                      </div>
                      <div class="col-xs-6 text-right">
                        <p class="announcement-heading">0</p>
                        <p class="announcement-text">Veerle</p>
                      </div>
                    </div>
                  </div>
                  <a href="<?php echo url('/admin/veerle'); ?>">
                    <div class="panel-footer announcement-bottom">
                      <div class="row">
                        <div class="col-xs-12">
                          Bekijk alle berichten van Veerle
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="panel panel-info">
                  <div class="panel-heading">
                    <div class="row">
                      <div class="col-xs-6">
                        <i class="fa fa-user fa-5x"></i>
                      </div>
                      <div class="col-xs-6 text-right">
                        <p class="announcement-heading">0</p>
                        <p class="announcement-text">Philiene</p>
                      </div>
                    </div>
                  </div>
                  <a href="<?php echo url('/admin/philiene'); ?>">
                    <div class="panel-footer announcement-bottom">
                      <div class="row">
                        <div class="col-xs-12">
                          Bekijk alle berichten van Philiene
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <div class="row">
                      <div class="col-xs-5">
                        <i class="fa fa-gift fa-5x"></i>
                      </div>
                      <div class="col-xs-7 text-right">
                        <p class="announcement-heading">12/40</p>
                        <p class="announcement-text">Cadeau's gekocht</p>
                      </div>
                    </div>
                  </div>
                  <a href="<?php echo url('/admin/cadeaus'); ?>">
                    <div class="panel-footer announcement-bottom">
                      <div class="row">
                        <div class="col-xs-12">
                          Bekijk alle cadeau's
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
            </div>
        </div>
        <!-- /.row -->
@stop