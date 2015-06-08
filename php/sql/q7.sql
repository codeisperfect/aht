select temp1.*,company.deadline,company.info from  (
 select apply.cid,users.name from apply left join users 
  on users.id=cid where sid=? group by cid)temp1 left join company on 
   temp1.cid=company.cid
