import 'package:flutter/material.dart';
import 'package:flutter_sanctum/providers/auth.dart';
import 'package:flutter_sanctum/widgets/nav-drawer.dart';
import 'package:flutter_secure_storage/flutter_secure_storage.dart';
import 'package:provider/provider.dart';
import 'package:flutter_sanctum/screens/login-screen.dart';


void main() {
  runApp(
    ChangeNotifierProvider(
      create: (_) => Auth(),
      child: MyApp(),
    )
  );
}

class MyApp extends StatelessWidget {
  // This widget is the root of your application.
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'Samieha',
      theme: ThemeData(
        primarySwatch: Colors.amber,
      ),
      home: MyHomePage(title: 'سميها'),
    );
  }
}

class MyHomePage extends StatefulWidget {
  MyHomePage({Key key, this.title}) : super(key: key);

  final String title;

  @override
  _MyHomePageState createState() => _MyHomePageState();
}

class _MyHomePageState extends State<MyHomePage> {
  final storage = new FlutterSecureStorage();

  void _attemptAuthentication() async {
    final key = await storage.read(key: 'auth');
    Provider.of<Auth>(context, listen: false).attempt(key);
  }

  @override
  void initState() {
    _attemptAuthentication();
    super.initState();
  }


  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text(widget.title),
      ),
      drawer: NavDrawer(),
      body: Center(
        child: Consumer<Auth>(
          builder: (context, auth, child) {
            if (auth.authenticated) {
              return Text(auth.user.name +' مرحبا بك ');
            } else {
              return
              Column(children: [
                SizedBox( height: 150 ,),
                Image.asset(
                  'Asset/logo.png',
                  width: 300,
                ),

                SizedBox( height: 20 ,),
                Text('لإعادة تأهيل المصابين بالحبسة الكلامية'),
                SizedBox( height: 40 ,),

                TextButton(
            onPressed: () {
            Navigator.push(context, MaterialPageRoute(builder: (context) => LoginScreen()));
            },

            child: Container(
            color: Colors.black87,
            padding: const EdgeInsets.symmetric(vertical: 9, horizontal: 30),
            child: const Text(
            'تسجيل دخول',
            style: TextStyle(color: Colors.white, fontSize: 16.0),
            ),
            ),
            )

              ],);


            }
          },
        )
      ),
    );
  }
}
