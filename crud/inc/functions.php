<?php
define('DB_NAME','C:\xampp\htdocs\learnphp/crud/db.text') ;

function seed(){
    $data = array(
        array(
            'id'=> 1,
            'fname' => 'Kamal',
            'lname' => 'Ahmed',
            'roll' => '11',
            
        ),
        array(
            'id'=> 2,
            'fname' => 'Jamal',
            'lname' => 'Ahmed',
            'roll' => '12',
            
        ),
        array(
            'id'=> 3,
            'fname' => 'Hasem',
            'lname' => 'Ahmed',
            'roll' => '13',
            
        ),
          array(
            'id'=> 4,
            'fname' => 'Roni',
            'lname' => 'Ahmed',
            'roll' => '14',
            
        ),  array(
            'id'=> 5,
            'fname' => 'Azad',
            'lname' => 'Ahmed',
            'roll' => '15',
            
        ),
    );
        $serializeData = serialize($data);
        file_put_contents(DB_NAME,$serializeData, LOCK_EX);
}
function generateReport(){
    $serializeData =  file_get_contents(DB_NAME);
    $students = unserialize($serializeData);
?>
<table>
    <tr>
        <th>Name</th>
        <th>Roll</th>
        <th width=25%>Action</th>
    </tr>
    <?php foreach ($students as $student) {
        ?>
    <tr>
        <td> <?php printf("%s %s", $student['fname'], $student['lname'] );?></td>
        <td><?php printf("%s", $student['roll'] );?> </td>
        <td><?php printf("<a href='/crud/index.php?task=edit?id=%s'>Edit</a> | <a href='/crud/index.php?task=delete?id=%s''>Delete</a>", $student['id'],$student['id']  );?>
        </td>

    </tr>
    <?php
    }?>
</table>
<?php
}