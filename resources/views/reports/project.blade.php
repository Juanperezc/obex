@extends('layouts.app')

@section('title', 'Minor page')

@section('content')
  <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
            <div class="wrapper wrapper-content animated fadeInUp">

<div class="ibox">
    <div class="ibox-title">
        <h5>Todos los proyectos</h5>
        <div class="ibox-tools">
        </div>
    </div>
    <div class="ibox-content">
        <div class="row m-b-sm m-t-sm">
            <div class="col-md-1">
                <button type="button" id="loading-example-btn" class="btn btn-white btn-sm"><i class="fa fa-refresh"></i> Recargar</button>
            </div>
            <div class="col-md-11">
                <div class="input-group"><input type="text" placeholder="Buscar" class="input-sm form-control"> <span class="input-group-btn">
                    <button type="button" class="btn btn-sm btn-primary"> Buscar</button> </span></div>
            </div>
        </div>

        <div class="project-list">

            <table class="table table-hover">
                <tbody>
                <tr>
                    <td class="project-status">
                        <span class="label label-primary">Activo</span>
                    </td>
                    <td class="project-title">
                        <a href="project_detail.html">Contract with Zender Company</a>
                        <br>
                        <small>Created 14.08.2014</small>
                    </td>
                    <td class="project-completion">
                            <small>Completion with: 48%</small>
                            <div class="progress progress-mini">
                                <div style="width: 48%;" class="progress-bar"></div>
                            </div>
                    </td>
                    <td class="project-people">
                        <a href=""><img alt="image" class="img-circle" src="{{asset('images/a3.png')}}"></a>
                        <a href=""><img alt="image" class="img-circle" src="{{asset('images/a1.png')}}"></a>
                        <a href=""><img alt="image" class="img-circle" src="{{asset('images/a2.png')}}"></a>
                        <a href=""><img alt="image" class="img-circle" src="{{asset('images/a4.png')}}"></a>
                        <a href=""><img alt="image" class="img-circle" src="{{asset('images/a5.png')}}"></a>
                    </td>
                    <td class="project-actions">
                        <a href="project/1" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> Ver </a>
                        
                    </td>
                </tr>
                <tr>
                    <td class="project-status">
                        <span class="label label-primary">Activo</span>
                    </td>
                    <td class="project-title">
                        <a href="project_detail.html">There are many variations of passages</a>
                        <br>
                        <small>Created 11.08.2014</small>
                    </td>
                    <td class="project-completion">
                        <small>Completion with: 28%</small>
                        <div class="progress progress-mini">
                            <div style="width: 28%;" class="progress-bar"></div>
                        </div>
                    </td>
                    <td class="project-people">
                        <a href=""><img alt="image" class="img-circle" src="{{asset('images/a7.png')}}"></a>
                        <a href=""><img alt="image" class="img-circle" src="{{asset('images/a6.png')}}"></a>
                        <a href=""><img alt="image" class="img-circle" src="{{asset('images/a3.png')}}"></a>
                    </td>
                    <td class="project-actions">
                        <a href="project/2" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> Ver </a>
                        
                    </td>
                </tr>
                <tr>
                    <td class="project-status">
                        <span class="label label-default">Inactivo</span>
                    </td>
                    <td class="project-title">
                        <a href="project_detail.html">Many desktop publishing packages and web</a>
                        <br>
                        <small>Created 10.08.2014</small>
                    </td>
                    <td class="project-completion">
                        <small>Completion with: 8%</small>
                        <div class="progress progress-mini">
                            <div style="width: 8%;" class="progress-bar"></div>
                        </div>
                    </td>
                    <td class="project-people">
                        <a href=""><img alt="image" class="img-circle" src="{{asset('images/a5.png')}}"></a>
                        <a href=""><img alt="image" class="img-circle" src="{{asset('images/a3.png')}}"></a>
                    </td>
                    <td class="project-actions">
                        <a href="project/1" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> Ver </a>
                        
                    </td>
                </tr>
                <tr>
                    <td class="project-status">
                        <span class="label label-primary">Activo</span>
                    </td>
                    <td class="project-title">
                        <a href="project_detail.html">Letraset sheets containing</a>
                        <br>
                        <small>Created 22.07.2014</small>
                    </td>
                    <td class="project-completion">
                        <small>Completion with: 83%</small>
                        <div class="progress progress-mini">
                            <div style="width: 83%;" class="progress-bar"></div>
                        </div>
                    </td>
                    <td class="project-people">
                        <a href=""><img alt="image" class="img-circle" src="{{asset('images/a2.png')}}"></a>
                        <a href=""><img alt="image" class="img-circle" src="{{asset('images/a3.png')}}"></a>
                        <a href=""><img alt="image" class="img-circle" src="{{asset('images/a1.png')}}"></a>
                        <a href=""><img alt="image" class="img-circle" src="{{asset('images/a7.png')}}"></a>
                    </td>
                    <td class="project-actions">
                        <a href="project/3" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> Ver </a>
                        
                    </td>
                </tr>
                <tr>
                    <td class="project-status">
                        <span class="label label-primary">Activo</span>
                    </td>
                    <td class="project-title">
                        <a href="project_detail.html">Letraset sheets containing</a>
                        <br>
                        <small>Created 22.07.2014</small>
                    </td>
                    <td class="project-completion">
                        <small>Completion with: 83%</small>
                        <div class="progress progress-mini">
                            <div style="width: 83%;" class="progress-bar"></div>
                        </div>
                    </td>
                    <td class="project-people">
                        <a href=""><img alt="image" class="img-circle" src="{{asset('images/a2.png')}}"></a>
                        <a href=""><img alt="image" class="img-circle" src="{{asset('images/a3.png')}}"></a>
                        <a href=""><img alt="image" class="img-circle" src="{{asset('images/a1.png')}}"></a>
                    </td>
                    <td class="project-actions">
                        <a href="project/4" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> Ver </a>
                        
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
            </div>
        </div>
    </div>
@endsection
