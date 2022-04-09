@include('admin.layout.header')                
                        <div class="row m0 main-row">
                            <h4 class="title"></h4>
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#Masters" role="tab" aria-controls="pills-flamingo" aria-selected="true">Form Setup</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                             <a href="{{ route('admin.add-element') }}" class="btn btn-edit">Add Element</a>
                                    <br><br>
                                <div class="tab-pane active" id="Masters" role="tabpanel" aria-labelledby="flamingo-tab">

                                    <div class="row">
                                            <div class="col-md-8 pl0">
                                                <div class="row">
                                                    @foreach($form_setups as $form_setup)
                                                    <div class="col-md-6 pl0">
                                                        <label>{{ $form_setup->label }}</label>
                                                        @if($form_setup->type=="text")
                                                        <input type="text" name="{{ $form_setup->name }}" id="{{ $form_setup->input_id }}"  >
                                                        @elseif($form_setup->type=="selectbox")
                                                        <select name="{{ $form_setup->name }}" id="{{ $form_setup->input_id }}"  class="col-md-6 pl0">
                                                                <option value="">Select {{ $form_setup->label }}</option>
                                                        </select>
                                                         @elseif($form_setup->type=="textarea")
                                                         <textarea rows="3" id="{{ $form_setup->input_id }}" name="{{ $form_setup->name }}" ></textarea>
                                                        @endif
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>                    
 @include('admin.layout.footer')