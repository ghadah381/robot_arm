# ذراع الروبوت
## وصف المشروع
يتيح هذا المشروع بادخال زاوية ذراع الروبوت وحفظها في قاعدة البيانات ومن ثم استعراض هذه الزواية 
### armpanel.html أول صحفة
أول صحة هي صفحة لعرض السته محركات واختيار الدرجة لكل محرك ومن ثم الضغط على زر حفظ لحفظ البيانات أو زر تشغيل
 لعرض اخر بيانات قمت بحفظها 
### صفحة add.php
 عند الضغط على زر حفظ يتم حفظ البيانات التي قمت بادخالها في قاعدة البيانات في جدول يحتوي على سبع اعمده الاول الايدي لاستخدامه لعرض البيانات و السته محركات لكل محرك عامود و ينقلك إلى صفحة بي اتش بي ليخبرك 
انه تم حفظ البيانات بنجاح و عرض زر عودة للعودة للصفحة الرئيسية أو زرتشغيل لعرض البيانات
الكود ادناه لحفظ البانات بعد الربط مع قاعدة البيانات 

`$motor1=$_POST['motor1'];`
`$motor2=$_POST['motor2'];`
`$motor3=$_POST['motor3'];`
`$motor4=$_POST['motor4'];`
`$motor5=$_POST['motor5'];`
`$motor6=$_POST['motor6'];`

`$sql = "INSERT INTO sel1 ( motor1 , motor2,motor3,motor4,motor5,motor6) VALUES ('$motor1', '$motor2','$motor3','$motor4','$motor5','$motor6')";`

### صفحة select.php
يتم عرض اخر بيانات قمت بحفظها للمحركات في قاعدة البيانات عن طريق الكود 
ادناه 

`$qry = mysqli_query($con , "SELECT * FROM sel1 ORDER BY id DESC LIMIT 1");> `
