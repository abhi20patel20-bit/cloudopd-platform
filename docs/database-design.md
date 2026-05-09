# Database Design

## Purpose

This document explains the initial database structure for CloudOps Platform.

The goal is to plan the main tables before creating migrations, so the relationships are clear.

---

## Main Tables

## users

Stores people who can log in to the platform.

Example fields:

```txt
id
organization_id
name
email
password
email_verified_at
last_login_at
created_at
updated_at
```

---

## organizations

Stores companies or teams using the platform.

Example fields:

```txt
id
name
slug
status
created_at
updated_at
```

---

## monitored_services

Stores services, APIs, websites, or applications monitored by the platform.

Example fields:

```txt
id
organization_id
name
description
url
service_type
status
check_interval_seconds
timeout_seconds
created_at
updated_at
```

---

## health_checks

Stores health check results for monitored services.

Example fields:

```txt
id
monitored_service_id
status_code
response_time_ms
is_successful
error_message
checked_at
created_at
updated_at
```

---

## incidents

Stores incidents or outages detected for monitored services.

Example fields:

```txt
id
monitored_service_id
title
description
severity
status
started_at
resolved_at
created_at
updated_at
```

---

## roles

Stores user roles for RBAC.

Example fields:

```txt
id
name
guard_name
created_at
updated_at
```

---

## permissions

Stores permission definitions for RBAC.

Example fields:

```txt
id
name
guard_name
created_at
updated_at
```

---

## notifications

Stores notifications sent by the platform.

Example fields:

```txt
id
organization_id
user_id
type
channel
title
message
is_read
sent_at
created_at
updated_at
```

---

## audit_logs

Stores important user and system actions.

Example fields:

```txt
id
user_id
action
entity_type
entity_id
old_values
new_values
ip_address
created_at
updated_at
```

---

## queue_jobs

Stores background job information.

Example fields:

```txt
id
queue_name
job_type
status
payload
attempts
failed_at
completed_at
created_at
updated_at
```

---

## api_tokens

Stores API/JWT token tracking information.

Example fields:

```txt
id
user_id
token_name
last_used_at
expires_at
created_at
updated_at
```

---

## integrations

Stores third-party API integrations.

Example fields:

```txt
id
organization_id
provider
api_key
base_url
status
last_synced_at
created_at
updated_at
```

---

## service_metrics

Stores collected service metrics for dashboards and monitoring.

Example fields:

```txt
id
monitored_service_id
cpu_usage
memory_usage
request_count
error_rate
uptime_percentage
recorded_at
created_at
updated_at
```

---

## sla_policies

Stores SLA/SLO configuration for monitored services.

Example fields:

```txt
id
monitored_service_id
availability_target
latency_target_ms
error_rate_target
created_at
updated_at
```

---

## incident_comments

Stores comments and updates added to incidents.

Example fields:

```txt
id
incident_id
user_id
comment
created_at
updated_at
```
