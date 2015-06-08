select users.name,temp1.* from (
 select temp.*,company.curround,company.num_round,company.deadline,company.isclosed,company.cid as compid from company left join (
  select cid,max(round) as maxs,min(round) as mins,count(round) as totalapp,sum(round>=100) as num_selected from apply group by cid
  )temp on temp.cid=company.cid
 ) temp1 left join users on 
users.id=temp1.compid 