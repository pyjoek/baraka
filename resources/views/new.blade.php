<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name')}}</title>
</head>
<body>
    <div class="main">
        <div class="add-student">
            <form action="/addStudent" method="post">
                @csrf
                <input type="text" name="name" placeholder="Full Name">
                <input type="text" name="rollno" placeholder="Roll Number">
                <input type="radio" name="gender" value="male"> Male
                <input type="radio" name="gender" value="female"> Female
                <input type="date" name="dob">
                <input type="submit" value="Add">
            </form>
        </div>
    </div>
</body>
</html>