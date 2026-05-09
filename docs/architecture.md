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
