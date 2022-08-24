<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - Privacy & Terms - Google</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

    <?php 
        $faqs = [
            [
                "question" => "title",
                "answer" => "lorem ipsum dolor sit amet"
            ],
            [
                "question" => "title",
                "answer" => "lorem ipsum dolor sit amet"
            ],
            [
                "question" => "title",
                "answer" => "lorem ipsum dolor sit amet"
            ],
        ];
    ?>
    
    <header>
        <div class="d-flex justify-content-between align-items-center p-2 border-bottom position-fixed top-0 start-0 end-0 bg-white">
            <div>
                <span>[-]</span>
                <span>FAQ</span>
            </div>
            <div>
                <span>[:]</span>
                <button class="btn btn-primary">Sign in</button>
            </div>
        </div>
    </header>

    <main class="mt-5 p-4">
        
        <ul class="list-unstyled">
            <?php foreach($faqs as $faq) { ?>
                <li>
                    <h2><?php echo $faq['question']; ?></h2>
                    <p><?php echo $faq['answer']; ?></p>
                </li>
            <?php }; ?>
        </ul>

    </main>

    <footer class="d-flex justify-content-between align-items-center bg-secondary">
        <ul class="list-unstyled d-flex justify-content-around align-items-center">
            <li>Google</li>
            <li>About Google</li>
            <li>Privacy</li>
            <li>Privacy</li>
        </ul>
        <div>
            <span>[-]</span>
            <select name="" id="">
                <option value="">Language</option>
                <option value="">Language</option>
                <option value="">Language</option>
            </select>
        </div>
    </footer>

</body>
</html>