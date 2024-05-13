<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="Shuvo">
        </div>
        <div>
            <label for="choice_1">Choice 1</label>
            <input type="text" name="choice[]" id="choice_1" value="Dhaka Polytechnic Institute">
        </div>
        <div>
            <label for="choice_1">Choice 1</label>
            <input type="text" name="choice[]" id="choice_1" value="Dhaka Polytechnic Institute">
        </div>
    
        <div>
            <label for="choice_2">Choice 2</label>
            <input type="text" name="choice[]" id="choice_2" value="Feni Polytechnic Institute">
        </div>
    
        <div>
            <label for="choice_3">Choice 3</label>
            <input type="text" name="choice[]" id="choice_3" value="Feni Computer Institute">
        </div>
    
        <div>
            <label for="choice_4">Choice 4</label>
            <input type="text" name="choice[]" id="choice_4" value="Dhaka Mohila Polytechnic Institute">
        </div>
    
        <div>
            <label for="choice_5">Choice 5</label>
            <input type="text" name="choice[]" id="choice_5" value="Chittagong Polytechnic Institute">
        </div>

        <div>
            <label for="choice_6">Choice 6</label>
            <input type="text" name="choice[]" id="choice_6" value="Comilla Polytechnic Institute">
        </div>
        <button type="submit">Save</button>
    </form>
</body>
</html>
