# Beyond the alert()

![Beyond the alert()](https://github.com/h41stur/beyond_the_alert/blob/main/src/img/h41stur.jpeg?raw=true)


**Beyond the alert()** se trata de um projeto pessoal para contribuir com o *mindset hacking* que compartilho como meus 10 centavos com a comunidade.

---

## Obtendo o Projeto

Para obter a cópia do projeto, clone o repositório.

```bash
git clone https://github.com/h41stur/beyond_the_alert.git && cd beyond_the_alert
```

Para "*buildar*" o contêiner:

```bash
docker build -t bta .
```

Para executar o contêiner, eu sugiro utilizar a flag `--rm` para autodestruí-lo após sua parada, evitando comprometimento desnecessário de memória.

```bash
docker run --rm -p 80:80 bta
```

Após sua execução, ao visitar seu *localhost* no navegador, seu menu principal estará disponível.

---

## Documentação

A documentação de todo o projeto, juntamente com as referências de cada *task* podem ser encontradas no meu blog:

- [https://h41stur.com/posts/beyond-the-alert/](https://h41stur.com/posts/beyond-the-alert/)

