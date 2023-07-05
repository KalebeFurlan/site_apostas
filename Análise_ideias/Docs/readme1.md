```mermaid

erDiagram
    Usuario ||..||Conta : tem
    Usuario {
    string Email
    int senha
    }
    Conta{
        int  ContaId
    }
    Usuario ||..||Jogo : jogar
    Pocker {
       int pares
    }
    Jogo }|..|{Pocker: muitas
    Jogo {
        string Pocker

    }
    
```
