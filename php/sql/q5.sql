select student.*,temp.num_place,users.name,users.username from student left join users 
 on users.id=student.sid left join ( 
  select apply.sid,count(cid) as num_place from apply where round=100  or round=400 group by sid
  )temp on temp.sid=student.sid;


