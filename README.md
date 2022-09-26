# Software for mechanical workshop
## List of features:
- Automated status notification(diagnosed, repaired etc.)
- Storing car's repair history
- Quantity of parts in warehouse(maybe ordering from merchant instead(hard to accomplish without external hardware))
- Work-management(?)

## Tech-stuff:
### Stack:
- Database: SQL(MySQL)
- Language: PHP
- Framework: CodeIgniter
- E-mail broker: Amazon SES/Microsoft Azure

### Database tables and fields:
**users**:
`id`, `first_name`, `last_name`, `username`, `password`, `created_at`, `deleted_at`

**clients**:
`id`, `first_name`, `last_name`, `email_address`, `phone_number`, `created_at`, `updated_at`, `deleted_at`

**vehicles**:
`id`, `manufacturer`, `model`, `year_of_production`, `vin`, `registration_number`, `created_at`, `updated_at`

**repairs**:
`id`, `vehicle_id`, `owner_id`, `diagnosis`, `repair_category`, `status`, `created_at`, `updated_at`, `deleted_at`

**parts**(to re-consider):
`id`, `type`, `name`, `suitable_for`, `manufacturer`, `quantity`, `updated_at`