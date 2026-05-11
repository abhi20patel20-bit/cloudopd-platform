# Architecture

## Purpose

CloudOps Platform is a cloud monitoring and incident management platform built to demonstrate Laravel, Vue, API authentication, queues, observability, Docker, Terraform, and Kubernetes concepts.

## Current Architecture

At the current stage, the system has:

- Laravel backend API
- Vue frontend
- Local development environment
- API health endpoints

## Planned Architecture

Later, the platform will include:

- JWT API authentication
- Service monitoring
- Incident management
- Redis queues
- RabbitMQ messaging
- Prometheus metrics
- Grafana dashboards
- Docker Compose
- Kubernetes deployment
- Terraform-managed AWS infrastructure

## High-Level Flow

```txt
Vue Frontend
↓
Laravel API
↓
Database
↓
Queues / Monitoring / External APIs

# Authentication

The platform uses JWT Bearer token authentication for API access.

Public routes:
- GET /api/health
- GET /api/version
- POST /api/auth/register
- POST /api/auth/login

Protected routes:
- GET /api/auth/me
- POST /api/auth/logout
- POST /api/auth/refresh

Authentication flow:
1. User registers or logs in.
2. Laravel validates credentials.
3. API returns a JWT access token.
4. Client sends token using the Authorization header.
5. Protected routes require a valid token.

Example header:

Authorization: Bearer TOKEN_HERE
