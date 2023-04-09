@extends('admin.master.main')
@section('content')

<div class="pagetitle">
    <h1>Add New Case</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item">Cases</li>
            <li class="breadcrumb-item active">Add Case</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-120 ">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Add Case</h5>

                    <!-- General Form Elements -->
                    <form action="{{url('admin/cases/store')}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Case No.</label>
                            <div class="col-sm-10">
                                <input type="text" required name="CaseId" class="form-control">
                                <span class="text-danger">@error('CaseId'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Registeration Date</label>
                            <div class="col-sm-10">
                                <input type="date" required name="DOB" class="form-control">
                                <span class="text-danger">@error('DOB'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Registeration Year</label>
                            <div class="col-sm-10">
                                <input type="text" required name="year" class="form-control">
                                <span class="text-danger">@error('year'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">District</label>
                            <div class="col-sm-10">
                                <div class="col-sm-10">
                                    <select class="form-control" name="District" value="Select District"
                                        placeholder="Select Districty">
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
                                        <option value="Kamber-Shahdadkot @ Kamber">Kamber-Shahdadkot @ Kamber</option>
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
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Court Type</label>
                            <div class="col-sm-10">
                                <div class="col-sm-10">
                                    <select class="form-control" name="CourtType" value="Select Type"
                                        placeholder="Select Type">
                                        <option value="NIL-Defaul Court Type">NIL-Defaul Court Type</option>
                                        <option value="District Courts">District Courts</option>
                                        <option value="Special Courts">Special Courts</option>
                                        <option value="Special Courts-2">Special Courts-2</option>
                                        <option value="Anti-Terrorism Courts">Anti-Terrorism Courts</option>
                                        <option value="Anti-Corruption Courts">Anti-Corruption Courts</option>
                                        <option value="Banking Courts">Banking Courts</option>
                                        <option value="Labour Courts">Labour Courts</option>
                                        <option value="Sindh Labour Appellate Tribunal">Sindh Labour Appellate Tribunal
                                        </option>
                                        <option value="Special Courts (CNS)">Special Courts (CNS)</option>
                                        <option value="Appelate Tribunal Sindh Revenue Board">Appelate Tribunal Sindh
                                            Revenue Board</option>
                                        <option value="Environmental Protection Tribunal">Environmental Protection
                                            Tribunal</option>
                                        <option value="National Ind. Relations Commission">National Ind. Relations
                                            Commission</option>
                                        <option value="Accountability Courts">Accountability Courts</option>
                                        <option value="Custom, Taxation & Anti Smuggling Courts">Custom, Taxation & Anti
                                            Smuggling Courts</option>
                                        <option value="Drug Court">Drug Court</option>
                                        <option value="Custom, Excise & Sales Tax Appellate Tribunal">Custom, Excise &
                                            Sales Tax Appellate Tribunal</option>
                                        <option value="Income Tax Appellate Tribunal(Inland Revenue)">Income Tax
                                            Appellate Tribunal(Inland Revenue)</option>
                                        <option value="Special Court (Offence in Banks)">Special Courts(Offence in
                                            Banks)</option>
                                        <option value="Special Court Commercial">Special Court Commercial</option>
                                        <option value="Insurance Tribunal">Insurance Tribunal</option>
                                        <option value="Foreign Exchange Appellate Tribunal">Foreign Exchange Appellate
                                            Tribunal</option>
                                        <option value="Removal Of Anti Encroachment">Removal Of Anti Encroachment
                                        </option>
                                        <option value="Federal Service Tribunal">Federal Service Tribunal</option>
                                        <option value="Special Court Of Pakistan Protection Ordinance">Special Court Of
                                            Pakistan Protection Ordinance</option>
                                        <option value="Intellectual Property Tribunal">Intellectual Property Tribunal
                                        </option>
                                        <option value="Appellate Tribunal Local Councils Sindh">Appellate Tribunal Local
                                            Councils Sindh</option>
                                        <option value="Consumer Protection Court">Consumer Protection Court</option>
                                        <option value="Commercial Courts">Commercial Courts</option>
                                    </Select>
                                    <span class="text-danger">@error('CourtType'){{$message}}@enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Party Name</label>
                            <div class="col-sm-10">
                                <input type="text" required name="PName" class="form-control">
                                <span class="text-danger">@error('PName'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Party Email</label>
                            <div class="col-sm-10">
                                <input type="email" required name="PEmail" class="form-control">
                                <span class="text-danger">@error('PEmail'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Opposition Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="OName" class="form-control">
                                <span class="text-danger">@error('OName'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">Matter</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" required name="Matter" style="height: 100px"></textarea>
                                <span class="text-danger">@error('Matter'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-2">
                            </div>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Submit Form</button>
                            </div>
                        </div>

                    </form><!-- End General Form Elements -->

                </div>
            </div>

        </div>
    </div>
</section>


@endsection