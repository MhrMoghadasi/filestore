<div class="row">
    @include('Admin.Partials.errors')
    <div class="col-xs-12 col-md-6">
        <form action="" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <labal for="name">نام کامل : </labal>
                <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}">
            </div>
            <div class="form-group">
                <labal for="email">ایمیل : </labal>
                <input type="email" class="form-control" name="email" id="email" value="{{old('email')}}">
            </div>
            <div class="form-group">
                <labal for="password">کلمه عبور : </labal>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <div class="form-group">
                <labal for="role">نقش کاربری : </labal>
                <select class="form-control" name="role" id="role">
                    <option value="1">مدیر</option>
                    <option value="2">کاربر</option>
                    <option value="3">فروشنده</option>
                </select>
            </div>
            <div class="form-group">
                <labal for="wallet">موجودی : </labal>
                <input type="wallet" class="form-control" name="wallet" id="wallet" value="{{old('wallet',0)}}">
            </div>
            <div class="form-group">
                <input class="btn btn-success" type="submit" name="submit_user" value="ذخیره اطلاعات">
            </div>
        </form>

    </div>
</div>
