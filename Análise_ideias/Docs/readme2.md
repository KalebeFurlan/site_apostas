@startuml
left to right direction
actor "User" as fc
rectangle Bloody_Coin{
  usecase "Logar" as UC1
  usecase "Ver Jogo" as UC2
  usecase "Jogar" as UC3
}
fc --> UC1
fc --> UC2
fc --> UC3
@enduml
