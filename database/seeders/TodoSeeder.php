<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Appointment;
use App\Models\Category;
use App\Models\Client;
use App\Models\Doctor;
use App\Models\MedicalRecord;
use App\Models\Payment;
use App\Models\Pet;
use App\Models\Promotion;
use App\Models\Service;
use App\Models\Supply;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // ADMINISTRADORES
        $user1 = User::create([
            'name' => 'Jhoel quispe',
            'email' => 'admin1@gmail.com',
            'phone' => '79811111',
            'dni' => '77000001',
            'password' => bcrypt('password'),

        ])->assignRole('Administrador');

        $user2 = User::create([
            'name' => 'Juan Pablo',
            'email' => 'admin2@gmail.com',
            'phone' => '79811112',
            'dni' => '77000002',
            'password' => bcrypt('password'),

        ])->assignRole('Administrador');

        $user3 = User::create([
            'name' => 'Alexander Inturias',
            'email' => 'admin3@gmail.com',
            'phone' => '79811113',
            'dni' => '77000003',
            'password' => bcrypt('password'),

        ])->assignRole('Administrador');


        Admin::create([
            'userId' => $user1->id,
            'position' => 'Administrador',
        ]);


        Admin::create([
            'userId' => $user2->id,
            'position' => 'Administrador',
        ]);

        Admin::create([
            'userId' => $user3->id,
            'position' => 'Administrador',
        ]);


        // CLIENTES USUARIO

        $user4 = User::create([
            'name' => 'Juan Pablo',
            'email' => 'cliente1@gmail.com',
            'phone' => '79811114',
            'dni' => '77000004',
            'password' => bcrypt('password'),
        ])->assignRole('Cliente');

        $user5 = User::create([
            'name' => 'Carlos Francisco',
            'email' => 'cliente2@gmail.com',
            'phone' => '79811115',
            'dni' => '77000005',
            'password' => bcrypt('password'),

        ])->assignRole('Cliente');

        $user6 = User::create([
            'name' => 'Manuel Hurtado',
            'email' => 'cliente3@gmail.com',
            'phone' => '79811116',
            'dni' => '77000006',
            'password' => bcrypt('password'),

        ])->assignRole('Cliente');

        $user7 = User::create([
            'name' => 'Daniel Quispe',
            'email' => 'cliente4@gmail.com',
            'phone' => '79811117',
            'dni' => '77000007',
            'password' => bcrypt('password'),

        ])->assignRole('Cliente');

        $user8 = User::create([
            'name' => 'Marco Antelo',
            'email' => 'cliente5@gmail.com',
            'phone' => '79811118',
            'dni' => '77000008',
            'password' => bcrypt('password'),

        ])->assignRole('Cliente');



        Client::create([
            'userId' => $user4->id,
            'address' => 'Av las americas #28',
        ]);

        Client::create([
            'userId' => $user5->id,
            'address' => 'Av las santos Dumont #30',
        ]);

        Client::create([
            'userId' => $user6->id,
            'address' => 'Av las santos Dumont #30',
        ]);

        Client::create([
            'userId' => $user7->id,
            'address' => 'Av americas #30',
        ]);

        Client::create([
            'userId' => $user8->id,
            'address' => 'Av alto san pedro #12',
        ]);

        // DOCTORES USUARIO


        $user9 = User::create([
            'name' => 'Andres Fernandez',
            'email' => 'doctor1@gmail.com',
            'phone' => '79811119',
            'dni' => '77000009',
            'password' => bcrypt('password'),

        ])->assignRole('Administrador');

        Doctor::create([
            'userId' => $user9->id,
            'speciality' => 'Medico general',
        ]);

        $user10 = User::create([
            'name' => 'Jhoel Ticona',
            'email' => 'doctor2@gmail.com',
            'phone' => '79811120',
            'dni' => '77000010',
            'password' => bcrypt('password'),

        ])->assignRole('Administrador');

        Doctor::create([
            'userId' => $user10->id,
            'speciality' => 'Medico general',
        ]);

        $user11 = User::create([
            'name' => 'Orlando Fernandez',
            'email' => 'doctor3@gmail.com',
            'phone' => '79811121',
            'dni' => '77000011',
            'password' => bcrypt('password'),

        ])->assignRole('Administrador');

        Doctor::create([
            'userId' => $user11->id,
            'speciality' => 'Medico general',
        ]);

        //! ----------------------------------------PET ------------------------------------------------------------


        $pet1 = Pet::create([
            'clientId' => $user4->id,
            'name' => 'Buddy',
            'species' => 'Dog',
            'breed' => 'Golden Retriever',
            'age' => 4,
            'weight' => 25.7,
            'gender' => 'M',
            'allergies' => 'Chicken',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $pet2 = Pet::create([
            'clientId' => $user4->id,
            'name' => 'Luna',
            'species' => 'Cat',
            'breed' => 'Persian',
            'age' => 2,
            'weight' => 4.5,
            'gender' => 'F',
            'allergies' => 'None',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $pet3 = Pet::create([
            'clientId' => $user5->id,
            'name' => 'Charlie',
            'species' => 'Dog',
            'breed' => 'Beagle',
            'age' => 3,
            'weight' => 12.3,
            'gender' => 'M',
            'allergies' => 'Grass pollen',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $pet4 = Pet::create([
            'clientId' => $user5->id,
            'name' => 'Max',
            'species' => 'Dog',
            'breed' => 'Bulldog',
            'age' => 5,
            'weight' => 20.4,
            'gender' => 'M',
            'allergies' => 'Dust',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $pet5 = Pet::create([
            'clientId' => $user6->id,
            'name' => 'Bella',
            'species' => 'Dog',
            'breed' => 'Labrador',
            'age' => 6,
            'weight' => 28.6,
            'gender' => 'F',
            'allergies' => 'None',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $pet6 = Pet::create([
            'clientId' => $user7->id,
            'name' => 'Daisy',
            'species' => 'Rabbit',
            'breed' => 'Angora',
            'age' => 1,
            'weight' => 2.5,
            'gender' => 'F',
            'allergies' => 'Carrots',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $pet7 = Pet::create([
            'clientId' => $user8->id,
            'name' => 'Rocky',
            'species' => 'Dog',
            'breed' => 'German Shepherd',
            'age' => 4,
            'weight' => 35.8,
            'gender' => 'M',
            'allergies' => 'None',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $pet8 = Pet::create([
            'clientId' => $user8->id,
            'name' => 'Coco',
            'species' => 'Bird',
            'breed' => 'Parrot',
            'age' => 3,
            'weight' => 0.9,
            'gender' => 'F',
            'allergies' => 'Sunflower seeds',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $pet9 = Pet::create([
            'clientId' => $user8->id,
            'name' => 'Shadow',
            'species' => 'Cat',
            'breed' => 'Maine Coon',
            'age' => 5,
            'weight' => 6.7,
            'gender' => 'M',
            'allergies' => 'None',
            'created_at' => now(),
            'updated_at' => now(),
        ]);



        //!-----------------------------MEDICAL RECORD-----------------------------------------------




        MedicalRecord::create([
            'petId' => $pet1->id,
            'date' => '2024-01-15',
            'description' => 'Consulta general, revisión de peso y signos vitales.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        MedicalRecord::create([
            'petId' => $pet2->id,
            'date' => '2024-02-10',
            'description' => 'Vacunación anual contra la rabia.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        MedicalRecord::create([
            'petId' => $pet3->id,
            'date' => '2024-03-20',
            'description' => 'Tratamiento por infección de oído.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        MedicalRecord::create([
            'petId' => $pet4->id,
            'date' => '2024-04-05',
            'description' => 'Consulta por alergia a ciertos alimentos.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        MedicalRecord::create([
            'petId' => $pet5->id,
            'date' => '2024-05-18',
            'description' => 'Chequeo dental y limpieza.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        MedicalRecord::create([
            'petId' => $pet6->id,
            'date' => '2024-06-12',
            'description' => 'Control de seguimiento tras cirugía menor.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        MedicalRecord::create([
            'petId' => $pet7->id,
            'date' => '2024-07-08',
            'description' => 'Vacunación múltiple: parvovirus, moquillo y hepatitis.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        MedicalRecord::create([
            'petId' => $pet8->id,
            'date' => '2024-08-25',
            'description' => 'Tratamiento para control de parásitos internos.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        MedicalRecord::create([
            'petId' => $pet9->id,
            'date' => '2024-09-15',
            'description' => 'Consulta preventiva, evaluación de estado general.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        //!---------------------------APPOINTMENT-------------------------------------------




        $appointment1 = Appointment::create([
            'date' => '2024-11-22 10:00:00',
            'status' => true,
            'clientId' => $user4->id,
            'doctorId' => $user9->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $appointment2 = Appointment::create([
            'date' => '2024-11-22 11:00:00',
            'status' => false,
            'clientId' => $user4->id,
            'doctorId' => $user9->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $appointment3 = Appointment::create([
            'date' => '2024-11-23 09:30:00',
            'status' => true,
            'clientId' => $user5->id,
            'doctorId' => $user9->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $appointment4 = Appointment::create([
            'date' => '2024-11-23 14:00:00',
            'status' => true,
            'clientId' => $user6->id,
            'doctorId' => $user10->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $appointment5 = Appointment::create([
            'date' => '2024-11-24 08:45:00',
            'status' => false,
            'clientId' => $user7->id,
            'doctorId' => $user10->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $appointment6 = Appointment::create([
            'date' => '2024-11-25 15:30:00',
            'status' => true,
            'clientId' => $user7->id,
            'doctorId' => $user10->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $appointment7 = Appointment::create([
            'date' => '2024-11-26 10:15:00',
            'status' => false,
            'clientId' => $user7->id,
            'doctorId' => $user11->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $appointment8 = Appointment::create([
            'date' => '2024-11-27 13:45:00',
            'status' => true,
            'clientId' => $user8->id,
            'doctorId' => $user11->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $appointment9 = Appointment::create([
            'date' => '2024-11-28 09:00:00',
            'status' => true,
            'clientId' => $user8->id,
            'doctorId' => $user11->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $appointment10 = Appointment::create([
            'date' => '2024-11-28 15:00:00',
            'status' => false,
            'clientId' => $user8->id,
            'doctorId' => $user11->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $appointment11 = Appointment::create([
            'date' => '2024-11-29 08:00:00',
            'status' => true,
            'clientId' => $user8->id,
            'doctorId' => $user11->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $appointment12 = Appointment::create([
            'date' => '2024-11-29 14:30:00',
            'status' => false,
            'clientId' => $user8->id,
            'doctorId' => $user11->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $appointment13 = Appointment::create([
            'date' => '2024-11-30 09:15:00',
            'status' => true,
            'clientId' => $user8->id,
            'doctorId' => $user11->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $appointment14 = Appointment::create([
            'date' => '2024-12-01 16:00:00',
            'status' => true,
            'clientId' => $user8->id,
            'doctorId' => $user11->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $appointment15 = Appointment::create([
            'date' => '2024-12-02 11:30:00',
            'status' => false,
            'clientId' => $user8->id,
            'doctorId' => $user11->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        //!----------------------------------------------PROMOTION--------------------------------------------------

        $promotion1 = Promotion::create([
            'name' => 'Black Friday',
            'description' => 'Descuento especial en todos los servicios durante el Black Friday.',
            'startDate' => '2024-11-1',
            'endDate' => '2024-11-30',
            'status' => true,
            'discountPercentage' => 20.00,
        ]);

        $promotion2 = Promotion::create([
            'name' => 'Navidad Feliz',
            'description' => 'Descuento en consultas médicas para celebrar la Navidad.',
            'startDate' => '2024-12-15',
            'endDate' => '2024-12-31',
            'status' => true,
            'discountPercentage' => 15.00,
        ]);

        $promotion3 = Promotion::create([
            'name' => 'Primavera Saludable',
            'description' => 'Promoción de primavera: descuentos en vacunas y chequeos.',
            'startDate' => '2024-09-01',
            'endDate' => '2024-09-30',
            'status' => false,
            'discountPercentage' => 10.00,
        ]);

        $promotion4 = Promotion::create([
            'name' => 'Semana de la Salud',
            'description' => 'Descuento especial en análisis y diagnósticos durante la Semana de la Salud.',
            'startDate' => '2024-06-01',
            'endDate' => '2024-06-07',
            'status' => false,
            'discountPercentage' => 25.00,
        ]);

        $promotion5 = Promotion::create([
            'name' => 'Fidelidad Dorada',
            'description' => 'Descuento exclusivo para clientes frecuentes en su próxima consulta.',
            'startDate' => '2024-11-01',
            'endDate' => '2024-12-01',
            'status' => true,
            'discountPercentage' => 30.00,
        ]);

        $promotion6 = Promotion::create([
            'name' => 'Año Nuevo Activo',
            'description' => 'Descuentos en paquetes de consulta para comenzar el año con buena salud.',
            'startDate' => '2024-12-26',
            'endDate' => '2025-01-05',
            'status' => true,
            'discountPercentage' => 18.00,
        ]);


        //!----------------------------------------------SERVICE--------------------------------------------------

        $service1 = Service::create([
            'name' => 'Perfil General Completo',
            'description' => 'Hemograma, frotis sanguíneo, Glucosa, Creatinina, Nitrógeno Ureico, Urea, Fosforo, Transaminasa TGO, Transaminasa TGP, Fosfatasa Alcalina, Gama glutamil transferasa GGT, Amilasa, Lipasa, Triglicérido, Colesterol, Proteína T, Albumina',
            'price' => 300.00,
            'promotionId' => $promotion1->id,
        ]);

        $service2 = Service::create([
            'name' => 'Perfil General Específico',
            'description' => 'Hemograma, frotis sanguíneo, Glucosa, Creatinina, Nitrógeno Ureico, Urea, Transaminasa TGO, Transaminasa TGP, Fosfatasa Alcalina, Proteína T, Albumina',
            'price' => 150.00,
            'promotionId' => $promotion1->id,
        ]);

        $service3 = Service::create([
            'name' => 'Perfil Renal',
            'description' => 'Creatinina, Nitrógeno Ureico, Urea, Fosforo',
            'price' => 80.00,
            'promotionId' => $promotion1->id,
        ]);

        $service4 = Service::create([
            'name' => 'Perfil Hepático',
            'description' => 'Transaminasa TGO, Transaminasa TGP, Fosfatasa Alcalina FALL, Gama glutamil transferasa GGT',
            'price' => 80.00,
            'promotionId' => $promotion1->id,
        ]);

        $service5 = Service::create([
            'name' => 'Perfil Pancreático',
            'description' => 'Amilasa, Lipasa, Glucosa',
            'price' => 80.00,
            'promotionId' => $promotion1->id,
        ]);

        $service6 = Service::create([
            'name' => 'Perfil Cardíaco',
            'description' => 'Creatin Kinasa CK MB, Creatin Kinasa total CK NAC, Fosfatasa Alcalina',
            'price' => 80.00,
            'promotionId' => $promotion1->id,
        ]);

        $service7 = Service::create([
            'name' => 'Perfil Lipídico',
            'description' => 'Colesterol Total, Triglicérido, Colesterol HDL, Colesterol LDL, Colesterol VLDL',
            'price' => 80.00,
            'promotionId' => $promotion1->id,
        ]);

        $service8 = Service::create([
            'name' => 'Química',
            'description' => 'Glucosa, Creatinina, Nitrógeno Ureico, Urea, Transaminasa TGO, Transaminasa TGP, Fosfatasa Alcalina, Proteína Total, Albumina',
            'price' => 120.00,
            'promotionId' => $promotion1->id,
        ]);

        $service9 = Service::create([
            'name' => 'Raspado Cutáneo',
            'description' => 'Identificación de ácaros, levaduras, bacterias, más antibiograma',
            'price' => 120.00,
            'promotionId' => $promotion1->id,
        ]);

        $service10 = Service::create([
            'name' => 'Cultivo y Antibiograma',
            'description' => 'Cultivo y antibiograma de secreciones biológicas',
            'price' => 120.00,
            'promotionId' => $promotion1->id,
        ]);

        $service11 = Service::create([
            'name' => 'Cultivos de Hongos',
            'description' => 'Cultivo para identificar hongos patógenos',
            'price' => 150.00,
            'promotionId' => $promotion1->id,
        ]);

        $service12 = Service::create([
            'name' => 'Espermatograma',
            'description' => 'Análisis de espermatozoides',
            'price' => 100.00,
            'promotionId' => $promotion1->id,
        ]);

        $service13 = Service::create([
            'name' => 'Examen General de Orina',
            'description' => 'Análisis completo de orina',
            'price' => 50.00,
            'promotionId' => $promotion1->id,
        ]);

        $service14 = Service::create([
            'name' => 'Examen Coproparasitológico y Moco Fecal',
            'description' => 'Identificación de parásitos y moco en heces',
            'price' => 50.00,
            'promotionId' => $promotion1->id,
        ]);

        $service15 = Service::create([
            'name' => 'Examen Coproparasitológico Seriado',
            'description' => 'Análisis seriado de heces',
            'price' => 100.00,
            'promotionId' => $promotion1->id,
        ]);


        $service16 = Service::create([
            'name' => 'TSH',
            'description' => 'Medición de TSH en sangre',
            'price' => 100.00,
            'promotionId' => $promotion1->id,
        ]);

        $service17 = Service::create([
            'name' => 'T4',
            'description' => 'Medición de T4 en sangre',
            'price' => 100.00,
            'promotionId' => $promotion1->id,
        ]);

        $service18 = Service::create([
            'name' => 'Cortisol',
            'description' => 'Medición de cortisol en sangre',
            'price' => 100.00,
            'promotionId' => $promotion1->id,
        ]);

        $service19 = Service::create([
            'name' => 'Progesterona',
            'description' => 'Medición de progesterona en sangre',
            'price' => 100.00,
            'promotionId' => $promotion1->id,
        ]);

        $service20 = Service::create([
            'name' => 'Testosterona',
            'description' => 'Medición de testosterona en sangre',
            'price' => 100.00,
            'promotionId' => $promotion1->id,
        ]);

        $service21 = Service::create([
            'name' => 'Citológica de Células',
            'description' => 'Identificación de células malignas, benignas e inflamatorias',
            'price' => 100.00,
            'promotionId' => $promotion1->id,
        ]);

        $service22 = Service::create([
            'name' => 'Citología Vaginal',
            'description' => 'Identificación hormonal en citología vaginal',
            'price' => 70.00,
            'promotionId' => $promotion1->id,
        ]);

        $service23 = Service::create([
            'name' => 'VIF y Leucemia Felina',
            'description' => 'Test rápido para VIF y leucemia felina',
            'price' => 150.00,
            'promotionId' => $promotion1->id,
        ]);

        $service24 = Service::create([
            'name' => 'CANIV-4',
            'description' => 'Test rápido (Anaplasia, Dirofilaria, Erlichia, Borelia)',
            'price' => 250.00,
            'promotionId' => $promotion1->id,
        ]);

        $service25 = Service::create([
            'name' => 'Erlichia Canis',
            'description' => 'Detección de Erlichia Canis',
            'price' => 150.00,
            'promotionId' => $promotion1->id,
        ]);

        $service26 = Service::create([
            'name' => 'Distemper Canino',
            'description' => 'Antígeno y anticuerpo de distemper canino',
            'price' => 150.00,
            'promotionId' => $promotion1->id,
        ]);

        $service27 = Service::create([
            'name' => 'Ditemper, Adenovirus, Influenza',
            'description' => 'Detección de adenovirus e influenza',
            'price' => 200.00,
            'promotionId' => $promotion1->id,
        ]);

        $service28 = Service::create([
            'name' => 'Parvovirus Antígeno y Anticuerpo',
            'description' => 'Detección de antígeno y anticuerpo de parvovirus',
            'price' => 150.00,
            'promotionId' => $promotion1->id,
        ]);

        $service29 = Service::create([
            'name' => 'Panelucopenia Felina',
            'description' => 'Antígeno y anticuerpo para panelucopenia felina',
            'price' => 150.00,
            'promotionId' => $promotion1->id,
        ]);

        $service30 = Service::create([
            'name' => 'Helicobacter Pylori Antígeno',
            'description' => 'Detección de antígeno Helicobacter Pylori',
            'price' => 100.00,
            'promotionId' => $promotion1->id,
        ]);

        $service31 = Service::create([
            'name' => 'Helicobacter Pylori IGG',
            'description' => 'Detección cuantificada de Helicobacter Pylori IGG',
            'price' => 100.00,
            'promotionId' => $promotion1->id,
        ]);

        $service32 = Service::create([
            'name' => 'Helicobacter Pylori IGM',
            'description' => 'Detección cuantificada de Helicobacter Pylori IGM',
            'price' => 100.00,
            'promotionId' => $promotion1->id,
        ]);

        $service33 = Service::create([
            'name' => 'Toxoplasma Gondii IGG',
            'description' => 'Detección cuantificada de Toxoplasma Gondii IGG',
            'price' => 100.00,
            'promotionId' => $promotion1->id,
        ]);

        $service34 = Service::create([
            'name' => 'Toxoplasma Gondii IGM',
            'description' => 'Detección cuantificada de Toxoplasma Gondii IGM',
            'price' => 100.00,
            'promotionId' => $promotion1->id,
        ]);

        $service35 = Service::create([
            'name' => 'Prueba de Coombs Directo',
            'description' => 'Prueba cualitativa para Coombs directo',
            'price' => 100.00,
            'promotionId' => $promotion1->id,
        ]);

        $service36 = Service::create([
            'name' => 'Prueba de Coombs Indirecto',
            'description' => 'Prueba cualitativa para Coombs indirecto',
            'price' => 100.00,
            'promotionId' => $promotion1->id,
        ]);

        $service37 = Service::create([
            'name' => 'Marcador Tumoral AFP',
            'description' => 'Marcador tumoral alfafetoproteína AFP cuantitativo',
            'price' => 100.00,
            'promotionId' => $promotion1->id,
        ]);

        $service38 = Service::create([
            'name' => 'Marcador Tumoral Antígeno Carcinoembrionario',
            'description' => 'Cuantificación del marcador antígeno carcinoembrionario',
            'price' => 100.00,
            'promotionId' => $promotion1->id,
        ]);

        $service39 = Service::create([
            'name' => 'Marcador Tumoral Antígeno Prostático',
            'description' => 'Cuantificación del antígeno prostático específico',
            'price' => 100.00,
            'promotionId' => $promotion1->id,
        ]);

        $service40 = Service::create([
            'name' => 'Células LE',
            'description' => 'Identificación de lupus eritematoso',
            'price' => 170.00,
            'promotionId' => $promotion1->id,
        ]);

        //!----------------------------------------------APPOINTMENT SERVICE--------------------------------------------------

        DB::table('appointmentService')->insert([
            [
                'appointmentId' => $appointment1->id,
                'serviceId' => $service1->id,
                'totalPrice' => 300.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'appointmentId' => $appointment1->id,
                'serviceId' => $service2->id,
                'totalPrice' => 150.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'appointmentId' => $appointment2->id,
                'serviceId' => $service3->id,
                'totalPrice' => 80.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'appointmentId' => $appointment3->id,
                'serviceId' => $service4->id,
                'totalPrice' => 80.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'appointmentId' => $appointment4->id,
                'serviceId' => $service5->id,
                'totalPrice' => 80.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'appointmentId' => $appointment5->id,
                'serviceId' => $service6->id,
                'totalPrice' => 80.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);


        //!----------------------------------------------PAYMENT--------------------------------------------------

        $payment1 = Payment::create([
            'appointmentId' => $appointment1->id,
            'date' => '2024-11-14 11:00:00',
            'amount' => 360.00,
            'method' => 'Tarjeta de Crédito',
        ]);

        $payment2 = Payment::create([
            'appointmentId' => $appointment2->id,
            'date' => '2024-11-15 14:30:00',
            'amount' => 64.00,
            'method' => 'Efectivo',
        ]);

        $payment3 = Payment::create([
            'appointmentId' => $appointment3->id,
            'date' => '2024-11-16 09:30:00',
            'amount' => 64.00,
            'method' => 'Transferencia Bancaria',
        ]);

        $payment4 = Payment::create([
            'appointmentId' => $appointment4->id,
            'date' => '2024-11-17 12:00:00',
            'amount' => 64.00,
            'method' => 'Tarjeta de Débito',
        ]);

        $payment5 = Payment::create([
            'appointmentId' => $appointment5->id,
            'date' => '2024-11-18 17:00:00',
            'amount' => 64.00,
            'method' => 'Efectivo',
        ]);



        //!----------------------------CATEGORY----------------------------------------------------------------------------
        $category1 = Category::create([
            'name' => 'Patologías Específicas',
        ]);

        $category2 = Category::create([
            'name' => 'Microbiología',
        ]);

        $category3 = Category::create([
            'name' => 'Hormonas',
        ]);

        $category4 = Category::create([
            'name' => 'Citología',
        ]);

        $category5 = Category::create([
            'name' => 'Inmunología',
        ]);


        //!----------------------------SUPPLY----------------------------------------------------------------------------

        $supply1 = Supply::create([
            'categoryId' => $category1->id,
            'name' => 'Tubo de Ensayo',
            'description' => 'Tubo de ensayo para análisis de sangre',
            'price' => 1.50,
            'stock' => 500,
        ]);

        $supply2 = Supply::create([
            'categoryId' => $category1->id,
            'name' => 'Reactivo Químico',
            'description' => 'Reactivo para análisis bioquímicos',
            'price' => 25.00,
            'stock' => 200,
        ]);

        $supply3 = Supply::create([
            'categoryId' => $category1->id,
            'name' => 'Aguja Hipodérmica',
            'description' => 'Aguja estéril para extracción de sangre',
            'price' => 0.75,
            'stock' => 1000,
        ]);

        $supply4 = Supply::create([
            'categoryId' => $category1->id,
            'name' => 'Guantes de Látex',
            'description' => 'Guantes desechables para procedimientos médicos',
            'price' => 0.10,
            'stock' => 3000,
        ]);

        $supply5 = Supply::create([
            'categoryId' => $category1->id,
            'name' => 'Gasa Estéril',
            'description' => 'Gasa estéril para cubrir heridas',
            'price' => 0.50,
            'stock' => 1500,
        ]);

        $supply6 = Supply::create([
            'categoryId' => $category1->id,
            'name' => 'Alcohol Etílico',
            'description' => 'Alcohol etílico al 70% para desinfección',
            'price' => 2.00,
            'stock' => 800,
        ]);

        $supply7 = Supply::create([
            'categoryId' => $category2->id,
            'name' => 'Placa de Petri',
            'description' => 'Placa estéril para cultivos microbiológicos',
            'price' => 5.00,
            'stock' => 300,
        ]);

        $supply8 = Supply::create([
            'categoryId' => $category2->id,
            'name' => 'Medio de Cultivo',
            'description' => 'Medio de cultivo para bacterias y hongos',
            'price' => 10.00,
            'stock' => 150,
        ]);

        $supply9 = Supply::create([
            'categoryId' => $category2->id,
            'name' => 'Pipeta Pasteur',
            'description' => 'Pipeta desechable para microbiología',
            'price' => 0.50,
            'stock' => 1000,
        ]);

        $supply10 = Supply::create([
            'categoryId' => $category2->id,
            'name' => 'Hisopo Estéril',
            'description' => 'Hisopo estéril para recolección de muestras',
            'price' => 0.75,
            'stock' => 500,
        ]);

        $supply11 = Supply::create([
            'categoryId' => $category2->id,
            'name' => 'Tubo Falcon',
            'description' => 'Tubo de centrífuga para análisis microbiológico',
            'price' => 1.25,
            'stock' => 400,
        ]);

        $supply12 = Supply::create([
            'categoryId' => $category2->id,
            'name' => 'Cultivo Sabouraud',
            'description' => 'Medio de cultivo para hongos',
            'price' => 12.00,
            'stock' => 100,
        ]);

        $supply13 = Supply::create([
            'categoryId' => $category2->id,
            'name' => 'Cultivo Agar Sangre',
            'description' => 'Medio de cultivo para bacterias hemolíticas',
            'price' => 15.00,
            'stock' => 80,
        ]);

        $supply14 = Supply::create([
            'categoryId' => $category3->id,
            'name' => 'Kit de TSH',
            'description' => 'Kit completo para análisis de TSH',
            'price' => 50.00,
            'stock' => 50,
        ]);

        $supply15 = Supply::create([
            'categoryId' => $category3->id,
            'name' => 'Kit de T4',
            'description' => 'Kit completo para análisis de T4',
            'price' => 55.00,
            'stock' => 45,
        ]);

        $supply16 = Supply::create([
            'categoryId' => $category3->id,
            'name' => 'Kit de Cortisol',
            'description' => 'Kit completo para análisis de cortisol',
            'price' => 60.00,
            'stock' => 40,
        ]);

        $supply17 = Supply::create([
            'categoryId' => $category3->id,
            'name' => 'Kit de Progesterona',
            'description' => 'Kit para medición de progesterona',
            'price' => 65.00,
            'stock' => 35,
        ]);

        $supply18 = Supply::create([
            'categoryId' => $category3->id,
            'name' => 'Kit de Testosterona',
            'description' => 'Kit para medición de testosterona',
            'price' => 70.00,
            'stock' => 30,
        ]);

        $supply19 = Supply::create([
            'categoryId' => $category3->id,
            'name' => 'Pipetas Graduadas',
            'description' => 'Pipetas graduadas para manejo de reactivos',
            'price' => 15.00,
            'stock' => 100,
        ]);

        // Suministros relacionados con "Citología"
        $supply20 = Supply::create([
            'categoryId' => $category4->id,
            'name' => 'Frotis de Citología',
            'description' => 'Lámina portaobjetos para muestras citológicas',
            'price' => 2.00,
            'stock' => 500,
        ]);

        $supply21 = Supply::create([
            'categoryId' => $category4->id,
            'name' => 'Tinción Papanicolaou',
            'description' => 'Reactivo para tinción citológica',
            'price' => 15.00,
            'stock' => 200,
        ]);

        $supply22 = Supply::create([
            'categoryId' => $category4->id,
            'name' => 'Escobillas Cervicales',
            'description' => 'Escobillas para obtención de muestras cervicales',
            'price' => 1.50,
            'stock' => 300,
        ]);

        $supply23 = Supply::create([
            'categoryId' => $category4->id,
            'name' => 'Láminas Portaobjetos',
            'description' => 'Láminas portaobjetos de vidrio',
            'price' => 0.50,
            'stock' => 1000,
        ]);

        $supply24 = Supply::create([
            'categoryId' => $category4->id,
            'name' => 'Tinción Giemsa',
            'description' => 'Reactivo para tinción diferencial',
            'price' => 20.00,
            'stock' => 150,
        ]);

        $supply25 = Supply::create([
            'categoryId' => $category4->id,
            'name' => 'Frascos de Fijación',
            'description' => 'Frascos para transporte y fijación de muestras',
            'price' => 5.00,
            'stock' => 100,
        ]);

        // Suministros relacionados con "Inmunología"
        $supply26 = Supply::create([
            'categoryId' => $category5->id,
            'name' => 'Kit de Antígenos Caninos',
            'description' => 'Kit para detección de antígenos en perros',
            'price' => 35.00,
            'stock' => 75,
        ]);

        $supply27 = Supply::create([
            'categoryId' => $category5->id,
            'name' => 'Reactivo Inmunológico',
            'description' => 'Reactivo para pruebas de inmunología',
            'price' => 20.00,
            'stock' => 200,
        ]);

        $supply28 = Supply::create([
            'categoryId' => $category5->id,
            'name' => 'Pipetas Automáticas',
            'description' => 'Pipetas automáticas para manejo de sueros',
            'price' => 200.00,
            'stock' => 30,
        ]);

        $supply29 = Supply::create([
            'categoryId' => $category5->id,
            'name' => 'Placas de ELISA',
            'description' => 'Placas para análisis inmunoenzimático ELISA',
            'price' => 25.00,
            'stock' => 150,
        ]);

        $supply30 = Supply::create([
            'categoryId' => $category5->id,
            'name' => 'Tiras Reactivas',
            'description' => 'Tiras para pruebas rápidas de inmunología',
            'price' => 2.00,
            'stock' => 500,
        ]);

        $supply31 = Supply::create([
            'categoryId' => $category5->id,
            'name' => 'Kit de Pruebas IgG',
            'description' => 'Kit para detección de IgG',
            'price' => 40.00,
            'stock' => 100,
        ]);

        $supply32 = Supply::create([
            'categoryId' => $category5->id,
            'name' => 'Kit de Pruebas IgM',
            'description' => 'Kit para detección de IgM',
            'price' => 42.00,
            'stock' => 90,
        ]);

        $supply33 = Supply::create([
            'categoryId' => $category5->id,
            'name' => 'Marcadores Tumorales',
            'description' => 'Kit para marcadores tumorales en suero',
            'price' => 100.00,
            'stock' => 50,
        ]);

        $supply34 = Supply::create([
            'categoryId' => $category5->id,
            'name' => 'Hisopos Nasales',
            'description' => 'Hisopos estériles para toma de muestras nasales',
            'price' => 0.75,
            'stock' => 300,
        ]);


        DB::table('serviceSupply')->insert([
            // Relación entre "Patologías Específicas" y sus suministros
            [
                'supplyId' => $supply1->id,
                'serviceId' => $service1->id,
                'quantity' => 3,
                'unit' => 'unidades',
            ],
            [
                'supplyId' => $supply2->id,
                'serviceId' => $service1->id,
                'quantity' => 1,
                'unit' => 'botella',

            ],
            [
                'supplyId' => $supply3->id,
                'serviceId' =>  $service1->id,
                'quantity' => 1,
                'unit' => 'unidad',

            ],
            [
                'supplyId' => $supply4->id,
                'serviceId' =>  $service1->id,
                'quantity' => 2,
                'unit' => 'pares',

            ],
            [
                'supplyId' => $supply1->id,
                'serviceId' => $service2->id,
                'quantity' => 2,
                'unit' => 'unidades',

            ],
            [
                'supplyId' => $supply2->id,
                'serviceId' => $service2->id,
                'quantity' => 1,
                'unit' => 'botella',

            ],
            [
                'supplyId' => $supply3->id,
                'serviceId' => $service2->id,
                'quantity' => 1,
                'unit' => 'unidad',

            ],
        
            // Relación entre "Microbiología" y sus suministros
            [
                'supplyId' => $supply7->id,
                'serviceId' => $service8->id,
                'quantity' => 2,
                'unit' => 'unidades',

            ],
            [
                'supplyId' => $supply8->id,
                'serviceId' =>$service8->id,
                'quantity' => 1,
                'unit' => 'botella',

            ],
            [
                'supplyId' => $supply9->id,
                'serviceId' => $service8->id,
                'quantity' => 3,
                'unit' => 'unidades',

            ],
            [
                'supplyId' => $supply7->id,
                'serviceId' => $service9->id,
                'quantity' => 1,
                'unit' => 'unidad',

            ],
            [
                'supplyId' => $supply8->id,
                'serviceId' => $service9->id,
                'quantity' => 2,
                'unit' => 'botellas',
     
            ],
            [
                'supplyId' => $supply9->id,
                'serviceId' => $service9->id,
                'quantity' => 1,
                'unit' => 'unidad',
   
            ],
        
            // Relación entre "Hormonas" y sus suministros
            [
                'supplyId' => $supply12->id,
                'serviceId' => $service15->id,
                'quantity' => 1,
                'unit' => 'kit',
   
            ],
            [
                'supplyId' => $supply13->id,
                'serviceId' => $service16->id,
                'quantity' => 1,
                'unit' => 'kit',

            ],
            [
                'supplyId' => $supply14->id,
                'serviceId' => $service17->id,
                'quantity' => 1,
                'unit' => 'kit',

            ],
            [
                'supplyId' => $supply15->id,
                'serviceId' => $service18->id,
                'quantity' => 1,
                'unit' => 'kit',

            ],
        
            // Relación entre "Citología" y sus suministros
            [
                'supplyId' => $supply19->id,
                'serviceId' => $service22->id,
                'quantity' => 2,
                'unit' => 'unidades',
  
            ],
            [
                'supplyId' => $supply20->id,
                'serviceId' => $service22->id,
                'quantity' => 1,
                'unit' => 'frasco',

            ],
            [
                'supplyId' => $supply21->id,
                'serviceId' => $service22->id,
                'quantity' => 2,
                'unit' => 'unidades',

            ],
        
            // Relación entre "Inmunología" y sus suministros
            [
                'supplyId' => $supply26->id,
                'serviceId' => $service35->id,
                'quantity' => 1,
                'unit' => 'kit',

            ],
            [
                'supplyId' => $supply27->id,
                'serviceId' => $service36->id,
                'quantity' => 2,
                'unit' => 'unidades',
  
            ],
            [
                'supplyId' => $supply28->id,
                'serviceId' => $service36->id,
                'quantity' => 3,
                'unit' => 'unidades',

            ],
            [
                'supplyId' =>  $supply29->id,
                'serviceId' =>  $service36->id,
                'quantity' => 1,
                'unit' => 'kit',

            ],
            [
                'supplyId' =>  $supply30->id,
                'serviceId' => $service36->id,
                'quantity' => 1,
                'unit' => 'unidad',

            ],
        ]);
        
    }
}
