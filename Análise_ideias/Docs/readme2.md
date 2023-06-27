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

//www.plantuml.com/plantuml/png/JSwngiCm38NXNKzno9xX9libD5lecgx5E8fhS2sGbQ6KldiRMeYt7pv9Q2ZcrBPxeiIhmGGQmysmH6LlKJ8vRw9eviBQm1MiddPoEIJ6AOaiZ-ieCJy9s0fxLnZDMOBxZi_ZNmqNLamIv6TTRLErrDEBLe-s_Tyl7DaTsTF0UVcy_WO0
