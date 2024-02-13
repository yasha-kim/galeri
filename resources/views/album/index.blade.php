@extends('layouts.app')

@section('content')
<div class="py-3 px-sm-5">
                
    <div class="row justify-content-center">
        <div class="col-4 col-lg-4 order-lg-2">
            <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                <a href="javascript:;">
                    <img src="/img/team-2.jpg"
                        class="rounded-circle img-fluid border border-2 border-white">
                </a>
            </div>
        </div>
    </div>
    
    <div class="card-body pt-0">
        <div class="row">
            <div class="col">
                <div class="d-flex justify-content-center">
                    <div class="d-grid text-center">
                        <span class="text-lg font-weight-bolder">22</span>
                        <span class="text-sm opacity-8">Friends</span>
                    </div>
                    <div class="d-grid text-center mx-4">
                        <span class="text-lg font-weight-bolder">10</span>
                        <span class="text-sm opacity-8">Photos</span>
                    </div>
                    <div class="d-grid text-center">
                        <span class="text-lg font-weight-bolder">89</span>
                        <span class="text-sm opacity-8">Comments</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <h5>
                Mark Davis<span class="font-weight-light">, 35</span>
            </h5>
            <div class="h6 font-weight-300">
                <i class="ni location_pin mr-2"></i>Bucharest, Romania
            </div>
            <div class="h6 mt-4">
                <i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Creative Tim Officer
            </div>
            <div>
                <i class="ni education_hat mr-2"></i>University of Computer Science
            </div>
        </div>
    </div>
    <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">
        <div class="d-flex justify-content-end">
            
            
        
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
            +
            </button>

            <!-- Modal -->
            <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog  modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header ">
                            <h2 class="modal-title" id="exampleModalLabel">Create Album</h2>
                            
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="">
                            @csrf
                                <div class="row g-8">
                               

                                
                                <div class="col-12 pb-3 ">
                                    <div class="form-group text-start">
                                    <label class="mb-1 fw-medium text-light-dark" for="modalInput2-7">Name</label>
                                    <input class="form-control" name="nama_album" type="text" placeholder="Like 'Places to Go' or 'Recipes to Make">
                                    </div>
                                </div>
                                <div class="col-12 pb-3">
                                    <div class="form-group text-start">
                                    <label class="mb-1 fw-medium text-light-dark" for="modalInput2-8">Deskripsi</label>
                                    <textarea class="form-control" name="diskripsi"></textarea>
                                    </div>
                                </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary">Create</button>
                                </div>
                                
                            </form>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
