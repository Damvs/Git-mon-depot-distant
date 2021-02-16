CREATE USER IF NOT EXISTS "util1"@"localhost" IDENTIFIED BY "mdp";
CREATE USER IF NOT EXISTS "util2"@"localhost" IDENTIFIED BY "mdp";
CREATE USER IF NOT EXISTS "util3"@"localhost" IDENTIFIED BY "mdp";

GRANT ALL
ON gescom_afpa.*
TO util1

GRANT SELECT
ON gescom_afpa.*
TO util2

GRANT SELECT
ON gescom_afpa.suppliers
TO util3