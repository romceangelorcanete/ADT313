import './App.css';
import Name from './component/Name/Name';
import Section from './component/Section/Section';
import Description from './component/Description/Description';

function App() {
  const userInformation = {
    Firstname: "Romce Angelo",
    Lastname: "Cañete",
    Section: "BSIT-3A",
    Description: "3rd year BSIT Student"
  }
  return (
    <div className="App">
      <Name Firstname={userInformation.Firstname} Lastname={userInformation.Lastname}/>
      <Section section={userInformation.Section}/>
      <Description Description={userInformation.Description}/>
    </div>
  );
}


export default App;
