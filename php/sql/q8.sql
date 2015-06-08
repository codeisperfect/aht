select users.name,company.cid,company.deadline,company.info from company left join users on users.id=company.cid
