<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="css/Feedback.css">
</head>
<body>
    <div class="Wrapper">
        <form action="" class="Feedbackform">
            <h2 class="feedbackhead">Feedback</h2>
            <ul class="feedbackcontent">
                <li class="feedbackitem">
                    <label for="" class="lb">Username: </label><br>
                    <input class="txtfeedback" placeholder="Username" type="text" name="" id="">
                </li>
                <li class="feedbackitem">
                    <label for="" class="lb">Email: </label><br>
                    <input class="txtfeedback" placeholder="Email" type="email" name="" id="">
                </li>
                <li class="feedbackitem">
                    <label for="" class="lb">Title: </label><br>
                    <input class="txtfeedback" placeholder="Title" type="text" name="" id="">
                </li>
                <li class="feedbackitem">
                    <label for="" class="lb">Image: </label><br>
                    <input class="txtfeedbackfile" type="file" name="" id="">
                </li>
                <li class="feedbackitem">
                    <label for="" class="lb">Description; </label><br>
                    <textarea class="txtfeedbackdescribe" placeholder="Description" name="" id="" minlength="15" maxlength="500"></textarea>
                </li>
            </ul>
            <button class="feedbacksendbtn" value="">Submit</button>
        </form>
    </div>
</body>
</html>