select temp1.*,student.cgpa,student.deptt from (
 select users.name as sname,users.username,temp.* from (
  select users.name,rcmnd.* from rcmnd left join users on users.id=rcmnd.cid)temp
  left join users on users.id=sid)temp1 
 left join student on student.sid=temp1.sid 
order by time desc
