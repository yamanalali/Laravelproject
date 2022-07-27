

@extends('layouts.adminbase')

@section('title', 'BeautyCenter - Add Category')


@section('content')





<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="title">
                            <h1 style="color:DodgerBlue;">> Add faq</h1>
                            <br>
                        </div>
                        <!--  Forms Start -->
                        <form action="{{route('admin.faq.store')}}" method="post" enctype="multipart/form-data">
                            @csrf

                      <div  div class="form-group">

</div>


                            <div class="form-group row">
                                <label for="question" class="col-sm-12 col-md-12 col-form-label"><b>Question</b></label>
                                <div class="col-sm-12 col-md-12">
                                    <input class="form-control" type="text" name="question" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="answer" >Answer</label>
                                <textarea class="form-control" name="answer"></textarea>
                            </div>
                            <script>
                                ClassicEditor
                                .create( document.querySelector('#answer'))
                                .then(editor => {
                                    console.log(editor);
                                })
                                .catch(error =>{
                                    console.log(error);
                                })
                            </script>



                             <div class="form-group">

                                 <label for="status" class="col-sm-12 col-md-12"><b>Status</b></label>
                                 <select id="status" name="status" class="form-control" placeholder="status" required>
                                     <option>True</option>
                                     <option>False</option>
                                 </select>

                                 <button type="submit" class="btn btn-primary">Submit Data</button>

                             </div>
                    </div>
                         </form>

 </form>
                </div>
            </div>
        </div>
    </div>
                         <!-- horizontal Basic Forms End -->


