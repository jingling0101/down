@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin</div>

                <div class="panel-body">
                    You are logged in! admin

                    <form>
                        <div class="form-group">
                            <label for="name">name</label>
                            <input type="text" name="name" class="form-control" placeholder="name">
                        </div>

                        <div class="form-group">
                            <label for="key words">key words</label>
                            <input type="text" name="key-words" class="form-control" placeholder="key-words">
                        </div>

                        <div class="form-group">
                            <label class="info">info</label>
                            <input type="text" name="info" class="form-control" placeholder="info">
                        </div>

                        <div class="form-group">
                            <label for="text">desc</label>
                            <textarea class="form-control" rows="3" placeholder=""></textarea>
                        </div>

                        <div class="form-group">
                            <label>几张详情图</label>
                            <select class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                            </select>

                        </div>


                        <div class="radio">
                            <label>
                                <input type="radio" name="type">竖屏
                            </label>
                            <label>
                                <input type="radio" name="type">横屏
                            </label>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-success text-right" type="submit">提交</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
