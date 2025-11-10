--- Projeto PHP + MySQL no Kubernetes Este projeto implementa uma aplicação web simples em PHP com backend MySQL, totalmente orquestrada em um cluster Kubernetes.
A proposta é demonstrar o uso de recursos como Deployments, Services, Secrets, PVCs e práticas de segurança em um ambiente de nuvem (como GCP).

--- Funcionalidades 
Formulário web para envio de comentários (nome, e-mail, mensagem) 
Backend PHP com conexão segura ao banco de dados
Banco MySQL com volume persistente 
Senhas protegidas via Kubernetes Secrets 
Exposição da aplicação via LoadBalancer 
Escalabilidade automática com HPA (Horizontal Pod Autoscaler)
Regras de rede com NetworkPolicy 

--- Segurança
O acesso ao banco é restrito apenas aos pods da aplicação via NetworkPolicy
Os dados do banco são persistidos com PersistentVolumeClaim

--- Por segurança, alguns recursos foram propositalmente omitidos ou simplificados, como:
-  Imagem da aplicação
--- A aplicação foi executada usando a imagem oficial:
- yaml image: php:7.4-apache
--- Essa escolha garante:
Segurança: imagem mantida pela comunidade oficial do PHP
Simplicidade: já vem com Apache configurado
Compatibilidade: ideal para rodar aplicações PHP sem precisar construir uma imagem personalizada O configmap.yml foi incluído como exemplo, mas não usado diretamente no volume (por segurança e simplicidade).
