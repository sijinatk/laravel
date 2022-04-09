@include('admin.layout.header')                
                        <div class="row m0 main-row">
                            <h4 class="title"></h4>
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#Masters" role="tab" aria-controls="pills-flamingo" aria-selected="true">Add Element</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="Masters" role="tabpanel" aria-labelledby="flamingo-tab">
                                     <form class="add-form" id="add-form-id" name="add-form-id" action="{{ route('admin.store-elements') }}" method="post" enctype="multipart/form-data" >
                                         @csrf
                                @method('POST')
                                    <div class="row">
                                            <div class="col-md-8 pl0">
                                                <div class="row">
                                                    <div class="col-md-6 pl0">
                                                    <select name="element" id="element"  class="col-md-6 pl0">
                                                        @foreach($form_elements as $form_element)
                                                                <option value="{{ $form_element->type }}">{{ $form_element->type }}</option>
                                                         @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 pl0">
                                                        <label>Label</label>
                                                        <input type="text" name="label_name" id="label_name"  >
                                                    </div>
                                                    <div class="col-md-6 pl0">
                                                        <label>Name</label>
                                                        <input type="text" name="name_name" id="name_name"  >
                                                    </div>
                                                    <div class="col-md-6 pl0">
                                                        <label>Id</label>
                                                        <input type="text" name="id_id" id="id_id"  >
                                                    </div>
                                                    <br>
                                                    <div id="opt_div" style="display: none;">
                                                     <div class="col-md-6 pl0" >
                                                       <label> Number of Options: (max. 10)</label>
                                                     <input type="text" id="member" name="member" value=""><br />
    <a href="#" id="filldetails" onclick="addFields()">Add Options</a>
    <div id="container"/>
                                        </div>
                                    </div>
                                </div>
                                                </div>
                                            </div>
                                           
                                        <div class="row mt43">
                                            <div class="col-md-12">
                                                <center>
                                                    <button type="submit" class="btn submit-btn">Submit</button>
                                                </center>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>                    
 @include('admin.layout.footer')
 <script src="{{ asset('admin_assets/js/custom_js/add_elements.js') }}"></script>