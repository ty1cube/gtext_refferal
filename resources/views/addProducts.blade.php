@extends('master')
@section('main')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <strong>Add a Product</strong>
            </div>
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Static</label>
                        <div class="col-md-9">
                            <p class="form-control-static">Username</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">Text Input</label>
                        <div class="col-md-9">
                            <input type="text" id="text-input" name="text-input" class="form-control" placeholder="Text">
                            <span class="help-block">This is a help text</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="email-input">Email Input</label>
                        <div class="col-md-9">
                            <input type="email" id="email-input" name="email-input" class="form-control" placeholder="Enter Email">
                            <span class="help-block">Please enter your email</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="password-input">Password</label>
                        <div class="col-md-9">
                            <input type="password" id="password-input" name="password-input" class="form-control" placeholder="Password">
                            <span class="help-block">Please enter a complex password</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="disabled-input">Disabled Input</label>
                        <div class="col-md-9">
                            <input type="text" id="disabled-input" name="disabled-input" class="form-control" placeholder="Disabled" disabled="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="textarea-input">Textarea</label>
                        <div class="col-md-9">
                            <textarea id="textarea-input" name="textarea-input" rows="9" class="form-control" placeholder="Content.."></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="select1">Select</label>
                        <div class="col-md-9">
                            <select id="select1" name="select1" class="form-control">
                                <option value="0">Please select</option>
                                <option value="1">Option #1</option>
                                <option value="2">Option #2</option>
                                <option value="3">Option #3</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="select2">Select Large</label>
                        <div class="col-md-9">
                            <select id="select2" name="select2" class="form-control form-control-lg">
                                <option value="0">Please select</option>
                                <option value="1">Option #1</option>
                                <option value="2">Option #2</option>
                                <option value="3">Option #3</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="select3">Select Small</label>
                        <div class="col-md-9">
                            <select id="select3" name="select3" class="form-control form-control-sm">
                                <option value="0">Please select</option>
                                <option value="1">Option #1</option>
                                <option value="2">Option #2</option>
                                <option value="3">Option #3</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="disabledSelect">Disabled Select</label>
                        <div class="col-md-9">
                            <select id="disabledSelect" class="form-control" disabled="">
                                <option value="0">Please select</option>
                                <option value="1">Option #1</option>
                                <option value="2">Option #2</option>
                                <option value="3">Option #3</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="multiple-select">Multiple select</label>
                        <div class="col-md-9">
                            <select id="multiple-select" name="multiple-select" class="form-control" size="5" multiple="">
                                <option value="1">Option #1</option>
                                <option value="2">Option #2</option>
                                <option value="3">Option #3</option>
                                <option value="4">Option #4</option>
                                <option value="5">Option #5</option>
                                <option value="6">Option #6</option>
                                <option value="7">Option #7</option>
                                <option value="8">Option #8</option>
                                <option value="9">Option #9</option>
                                <option value="10">Option #10</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Radios</label>
                        <div class="col-md-9">
                            <div class="radio">
                                <label for="radio1">
                                    <input type="radio" id="radio1" name="radios" value="option1"> Option 1
                                </label>
                            </div>
                            <div class="radio">
                                <label for="radio2">
                                    <input type="radio" id="radio2" name="radios" value="option2"> Option 2
                                </label>
                            </div>
                            <div class="radio">
                                <label for="radio3">
                                    <input type="radio" id="radio3" name="radios" value="option3"> Option 3
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Inline Radios</label>
                        <div class="col-md-9">
                            <label class="radio-inline" for="inline-radio1">
                                <input type="radio" id="inline-radio1" name="inline-radios" value="option1"> One
                            </label>
                            <label class="radio-inline" for="inline-radio2">
                                <input type="radio" id="inline-radio2" name="inline-radios" value="option2"> Two
                            </label>
                            <label class="radio-inline" for="inline-radio3">
                                <input type="radio" id="inline-radio3" name="inline-radios" value="option3"> Three
                            </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Checkboxes</label>
                        <div class="col-md-9">
                            <div class="checkbox">
                                <label for="checkbox1">
                                    <input type="checkbox" id="checkbox1" name="checkbox1" value="option1"> Option 1
                                </label>
                            </div>
                            <div class="checkbox">
                                <label for="checkbox2">
                                    <input type="checkbox" id="checkbox2" name="checkbox2" value="option2"> Option 2
                                </label>
                            </div>
                            <div class="checkbox">
                                <label for="checkbox3">
                                    <input type="checkbox" id="checkbox3" name="checkbox3" value="option3"> Option 3
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Inline Checkboxes</label>
                        <div class="col-md-9">
                            <label class="checkbox-inline" for="inline-checkbox1">
                                <input type="checkbox" id="inline-checkbox1" name="inline-checkbox1" value="option1">One
                            </label>
                            <label class="checkbox-inline" for="inline-checkbox2">
                                <input type="checkbox" id="inline-checkbox2" name="inline-checkbox2" value="option2">Two
                            </label>
                            <label class="checkbox-inline" for="inline-checkbox3">
                                <input type="checkbox" id="inline-checkbox3" name="inline-checkbox3" value="option3">Three
                            </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="file-input">File input</label>
                        <div class="col-md-9">
                            <input type="file" id="file-input" name="file-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="file-multiple-input">Multiple File input</label>
                        <div class="col-md-9">
                            <input type="file" id="file-multiple-input" name="file-multiple-input" multiple="">
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Submit</button>
                <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> Reset</button>
            </div>
        </div>
    </div>
@endsection