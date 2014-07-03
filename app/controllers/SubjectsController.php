<?php

class SubjectsController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($leg) {
        //$alumno = Student::find($id);
        $alumno = Student::where('legajo', $leg)->first();
        $plan_estudio = Syllabus::where('id', $alumno->syllabus_id)->get();
        $materias_plan = Subject::where('syllabus_id', $plan_estudio[0]->id)->get();

        $alumno_clean = array(
            'surename' => $alumno->surename,
            'name' => $alumno->name,
            'dni' => $alumno->dni,
            'email' => $alumno->email
        );

        $plan_clean = array(
            'name' => $plan_estudio[0]->name
        );

        $materias_clean = array();
        foreach ($materias_plan as $materia) {
            $materias_clean[] = $materia->name;
        }
        $datos_alumno = array(
            'alumno' => $alumno_clean,
            'plan_estudio' => $plan_clean,
            'materias_plan' => $materias_clean
        );

        return Response::json($datos_alumno);
    }

    /**
     * 
     * @param type $id
     * @return type
     */
    public function academicStatus($leg) {
        //$alumno = Student::find($id);
        $alumno = Student::where('legajo', $leg)->first();
        //$estado = Academic_Situation::where('student_id', $id)->get();
        $estado = Academic_Situation::where('student_id', $alumno->id)->get();
        $academics = array();
        foreach ($estado as $materia) {
            $nombres = Subject::where('id', $materia->subject_id)->get();
            foreach ($nombres as $nombre) {
                $academics[] = array(
                    'id' => $materia->subject_id,
                    'subject_name' => $nombre->name,
                    'status' => $materia->situation
                );
            }
        }
        return Response::json($academics);
    }

    //obtenemos las fechas de examanes para un alumno en particular
    public function examDates($leg) {
        //$alumno = Student::find($id);
        $alumno = Student::where('legajo', $leg)->first();
        //plan del alumno
        $plan_estudio = Syllabus::where('id', $alumno->syllabus_id)->get();
        //mesas del plan
        $mesas_plan = Exams::where('syllabus_id', $plan_estudio[0]->id)->get();

        $nombre_materia = array();
        foreach ($mesas_plan as $mesas) {
            $nombres = Subject::where('id', $mesas->subject_id)->get();
            foreach ($nombres as $nombre) {
                $nombre_materia[] = array(
                    'id' => $mesas->subject_id,
                    'subject_name' => $nombre->name,
                    'call' => $mesas->call
                );
            }
        }

        return Response::json($nombre_materia);
    }

}
