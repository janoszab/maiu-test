```sql
create trigger date_check_update
before update on companies
for each row
begin
    if (NEW.companyFoundationDate <> OLD.companyFoundationDate) then
        SIGNAL SQLSTATE VALUE '45000'
        SET MESSAGE_TEXT = 'Date already set';
    end if;
end;
```

```sql
SELECT
  MAX(CASE WHEN `activity` = 'IT' then `companyName` END) AS `IT`,
  MAX(CASE WHEN `activity` = 'Growing Plants' then `companyName` END) AS `Growing Plants`,
  MAX(CASE WHEN `activity` = 'Food' then `companyName` END) AS `Food`,
  MAX(CASE WHEN `activity` = 'Car' then `companyName` END) AS `Car`,
  MAX(CASE WHEN `activity` = 'Building Industry' then `companyName` END) AS `Building Industry`
FROM
  `companies`
GROUP BY
  `companyName`;
```

```sql
select 
  companyFoundationDate as date, GROUP_CONCAT(companyName) as company 
from 
 companies
group by 
  companyFoundationDate 
```
