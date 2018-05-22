CREATE FUNCTION appel_add_date() RETURNS trigger AS $appelt_add_date$
    BEGIN
        -- Rappelons-nous qui a chang� le salaire et quand
        NEW.dateappel := current_timestamp;
        RETURN NEW;
    END;
$appelt_add_date$ LANGUAGE plpgsql;

CREATE TRIGGER appel_add_date BEFORE INSERT OR UPDATE ON appel
    FOR EACH ROW EXECUTE PROCEDURE appel_add_date();

