SELECT drugs.did,drugs.name,drugs.expiry_time, mf_drug_stock.mf_date,mf_drug_stock.no_of_units
FROM drugs ,mf_drug_stock
WHERE  drugs.did =mf_drug_stock.did;

