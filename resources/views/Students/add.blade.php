@extends('Students.master')

@section('title')
    Add-Student 
@endsection

@section('content-title')
    <h1 class="text-center ">Add Student</h1>
@endsection

@section('content')
    <form action="">
        <div class="row g-3">
            <div class="col-12">
                <label for="">Name : </label>
                <input type="text" name="" class="form-control" id="" placeholder="name...">
            </div>
            <div class="col-12">
                <label for="">Gender : </label>
                <select name="" id="" class="form-select ">
                    <option value="Female">Female</option>
                    <option value="Male">Male</option>
                </select>
            </div>
            <div class="col-4">
                <label for="">Score1 : </label>
                <input type="text" name="" class="form-control" id="" placeholder="score1...">
            </div>
            <div class="col-4">
                <label for="">Score2 : </label>
                <input type="text" name="" class="form-control" id="" placeholder="score2...">
            </div>
            <div class="col-4">
                <label for="">Score3 : </label>
                <input type="text" name="" class="form-control" id="" placeholder="score3...">
            </div>
            <div class="col-12">
                <label for="">Profile : </label>
                <input type="file" name="" class="form-control" id="">
            </div>
            <div class="col-4 mx-auto ">
                <button class="btn btn-success w-100">Submit</button>
            </div>
        </div>
    </form>

    
@endsection