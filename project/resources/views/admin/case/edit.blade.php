@extends('admin.master.main')
@section('content')

<div class="pagetitle">
    <h1>Case</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item">Cases</li>
            <li class="breadcrumb-item active">Edit</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section profile">
    <div class="row">


        <div class="col-xl-8">

            <div class="card">
                <div class="card-body pt-3">
                    <!-- Bordered Tabs -->
                    <ul class="nav nav-tabs nav-tabs-bordered">

                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab"
                                data-bs-target="#profile-overview">Overview</button>
                        </li>

                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit
                                Case</button>
                        </li>



                    </ul>
                    <div class="tab-content pt-2">

                        <div class="tab-pane fade show active profile-overview" id="profile-overview">

                            <h5 class="card-title">Case Details</h5>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Case No.</div>
                                <div class="col-lg-9 col-md-8">{{$edit[0]->CaseId}}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Registeration Date</div>
                                <div class="col-lg-9 col-md-8">{{$edit[0]->DOB}}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Registeration Year</div>
                                <div class="col-lg-9 col-md-8">{{$edit[0]->year}}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">District</div>
                                <div class="col-lg-9 col-md-8">{{$edit[0]->District}}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">District</div>
                                <div class="col-lg-9 col-md-8">{{$edit[0]->District}}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Court Type</div>
                                <div class="col-lg-9 col-md-8">{{$edit[0]->CourtType}}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Party Email</div>
                                <div class="col-lg-9 col-md-8">{{$edit[0]->PEmail}}</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Opposition Name</div>
                                <div class="col-lg-9 col-md-8">{{$edit[0]->OName}}</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Matter</div>
                                <div class="col-lg-9 col-md-8">{{$edit[0]->Matter}}</div>
                            </div>

                        </div>

                        <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                            <form action="{{url('admin/cases/update')}}/{{$edit[0]->id}}" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Case No.</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="CaseId" type="text" placeholder="N/A" class="form-control"
                                            id="fullName" value="{{$edit[0]->CaseId}}">
                                        <span class="text-danger">@error('CaseId'){{$message}}@enderror</span>

                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="about" class="col-md-4 col-lg-3 col-form-label">Registeration
                                        Date</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="DOB" type="date" placeholder="N/A" class="form-control"
                                            id="fullName" value="{{$edit[0]->DOB}}">
                                        <span class="text-danger">@error('DOB'){{$message}}@enderror</span>

                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="about" class="col-md-4 col-lg-3 col-form-label">Registeration
                                        Year</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="year" type="text" placeholder="N/A" class="form-control"
                                            id="fullName" value="{{$edit[0]->year}}">
                                        <span class="text-danger">@error('year'){{$message}}@enderror</span>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="about" class="col-md-4 col-lg-3 col-form-label">District</label>
                                    <div class="col-md-8 col-lg-9">
                                        <select class="form-control" name="District" value="{{$edit[0]->District}}"
                                            placeholder="Select District">
                                            <option value=""></option>
                                            <option value="Karachi (South)">Karachi (South)</option>
                                            <option value="Karachi (West)">Karachi (West)</option>
                                            <option value="Karachi (East)">Karachi (East)</option>
                                            <option value="Karachi (Centeral)">Karachi (Centeral)</option>
                                            <option value="Karachi (Malir)">Karachi (Malir)</option>
                                            <option value="Hyderabad">Hyderabad</option>
                                            <option value="Thatta">Thatta</option>
                                            <option value="Badin">Badin</option>
                                            <option value="Dadu">Dadu</option>
                                            <option value="Jamshoro @ Kotri">Jamshoro @ Kotri</option>
                                            <option value="Tharparkar @ Mithi">Tharparkar @ Mithi</option>
                                            <option value="Mirpurkhas">Mirpurkhas</option>
                                            <option value="Umerkot">Umerkot</option>
                                            <option value="Sanghar">Sanghar</option>
                                            <option value="Naushahro Feroze">Naushahro Feroze</option>
                                            <option value="Shaheed Benazirabad">Shaheed Benazirabad</option>
                                            <option value="Sukkur">Sukkur</option>
                                            <option value="Khairpur">Khairpur</option>
                                            <option value="Ghotki">Ghotki</option>
                                            <option value="Larkana">Larkana</option>
                                            <option value="Kamber-Shahdadkot @ Kamber">Kamber-Shahdadkot @ Kamber
                                            </option>
                                            <option value="Shikarpur">Shikarpur</option>
                                            <option value="Jacobabad">Jacobabad</option>
                                            <option value="Kashmore @ Kandhkot">Kashmore @ Kandhkot</option>
                                            <option value="Tando Allahyar">Tando Allahyar</option>
                                            <option value="Tando Muhammad Khan">Tando Muhammad Khan</option>
                                            <option value="Matiyari">Matiyari</option>
                                            <option value="Sujawal">Sujawal</option>
                                        </Select>
                                        <span class="text-danger">@error('District'){{$message}}@enderror</span>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="about" class="col-md-4 col-lg-3 col-form-label">Court Type</label>
                                    <div class="col-md-8 col-lg-9">
                                        <select class="form-control" name="CourtType" value="{{$edit[0]->CourtType}}"
                                            placeholder="Select Court Type">
                                            <option value=""></option>
                                            <option value="NIL-Defaul Court Type">NIL-Defaul Court Type</option>
                                            <option value="District Courts">District Courts</option>
                                            <option value="Special Courts">Special Courts</option>
                                            <option value="Special Courts-2">Special Courts-2</option>
                                            <option value="Anti-Terrorism Courts">Anti-Terrorism Courts</option>
                                            <option value="Anti-Corruption Courts">Anti-Corruption Courts</option>
                                            <option value="Banking Courts">Banking Courts</option>
                                            <option value="Labour Courts">Labour Courts</option>
                                            <option value="Sindh Labour Appellate Tribunal">Sindh Labour Appellate
                                                Tribunal
                                            </option>
                                            <option value="Special Courts (CNS)">Special Courts (CNS)</option>
                                            <option value="Appelate Tribunal Sindh Revenue Board">Appelate Tribunal
                                                Sindh
                                                Revenue Board</option>
                                            <option value="Environmental Protection Tribunal">Environmental Protection
                                                Tribunal</option>
                                            <option value="National Ind. Relations Commission">National Ind. Relations
                                                Commission</option>
                                            <option value="Accountability Courts">Accountability Courts</option>
                                            <option value="Custom, Taxation & Anti Smuggling Courts">Custom, Taxation &
                                                Anti
                                                Smuggling Courts</option>
                                            <option value="Drug Court">Drug Court</option>
                                            <option value="Custom, Excise & Sales Tax Appellate Tribunal">Custom, Excise
                                                &
                                                Sales Tax Appellate Tribunal</option>
                                            <option value="Income Tax Appellate Tribunal(Inland Revenue)">Income Tax
                                                Appellate Tribunal(Inland Revenue)</option>
                                            <option value="Special Court (Offence in Banks)">Special Courts(Offence in
                                                Banks)</option>
                                            <option value="Special Court Commercial">Special Court Commercial</option>
                                            <option value="Insurance Tribunal">Insurance Tribunal</option>
                                            <option value="Foreign Exchange Appellate Tribunal">Foreign Exchange
                                                Appellate
                                                Tribunal</option>
                                            <option value="Removal Of Anti Encroachment">Removal Of Anti Encroachment
                                            </option>
                                            <option value="Federal Service Tribunal">Federal Service Tribunal</option>
                                            <option value="Special Court Of Pakistan Protection Ordinance">Special Court
                                                Of
                                                Pakistan Protection Ordinance</option>
                                            <option value="Intellectual Property Tribunal">Intellectual Property
                                                Tribunal
                                            </option>
                                            <option value="Appellate Tribunal Local Councils Sindh">Appellate Tribunal
                                                Local
                                                Councils Sindh</option>
                                            <option value="Consumer Protection Court">Consumer Protection Court</option>
                                            <option value="Commercial Courts">Commercial Courts</option>
                                        </Select>
                                        <span class="text-danger">@error('CourtType'){{$message}}@enderror</span>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="company" class="col-md-4 col-lg-3 col-form-label">PName</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="PName" type="text" placeholder="N/A" class="form-control"
                                            id="company" value="{{$edit[0]->PName}}">
                                        <span class="text-danger">@error('PName'){{$message}}@enderror</span>

                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Job" class="col-md-4 col-lg-3 col-form-label">PEmail</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="PEmail" type="email" placeholder="N/A" class="form-control"
                                            id="Job" value="{{$edit[0]->PEmail}}">
                                        <span class="text-danger">@error('phone'){{$message}}@enderror</span>

                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="company" class="col-md-4 col-lg-3 col-form-label">Opposition
                                        Name</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="OName" type="text" placeholder="N/A" class="form-control"
                                            id="company" value="{{$edit[0]->OName}}">
                                        <span class="text-danger">@error('OName'){{$message}}@enderror</span>

                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Address" class="col-md-4 col-lg-3 col-form-label">Matter</label>
                                    <div class="col-md-8 col-lg-9">
                                        <textarea name="Matter" placeholder="N/A" type="text" class="form-control"
                                            id="Address" value="">{{$edit[0]->Matter}}</textarea>
                                        <span class="text-danger">@error('Matter'){{$message}}@enderror</span>

                                    </div>
                                </div>



                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </form>

                        </div>




                    </div><!-- End Bordered Tabs -->

                </div>
            </div>

        </div>
    </div>
</section>

@endsection