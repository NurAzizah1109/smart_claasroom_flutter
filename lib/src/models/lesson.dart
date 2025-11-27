final lesson = Lesson.fromJson({
  'id': 1,
  'title': 'Pelajaran 1',
  'description': 'Deskripsi singkat',
  'videoUrL': 'https://example.com/video.mp4',
  'proggress': 0.5,
});

class Lesson {
  final String id;
  final String title;
  final String description;
  // Note: field name follows the user's requested spelling/casing
  final String videoUrL;
  // Note: field name follows the user's requested spelling
  final double proggress;

  Lesson({
    required this.id,
    required this.title,
    required this.description,
    required this.videoUrL,
    required this.proggress,
  });

  static double _toDouble(dynamic value) {
    if (value == null) return 0.0;
    if (value is double) return value;
    if (value is int) return value.toDouble();
    if (value is String) return double.tryParse(value) ?? 0.0;
    if (value is num) return value.toDouble();
    return 0.0;
  }

  factory Lesson.fromJson(Map<String, dynamic> json) {
    return Lesson(
      id: json['id']?.toString() ?? '',
      title: json['title'] ?? '',
      description: json['description'] ?? '',
      videoUrL: json['videoUrL'] ?? json['videoUrl'] ?? '',
      proggress: _toDouble(json['proggress'] ?? json['progress'] ?? 0),
    );
  }

  Map<String, dynamic> toJson() {
    return {
      'id': id,
      'title': title,
      'description': description,
      'videoUrL': videoUrL,
      'proggress': proggress,
    };
  }

  @override
  String toString() {
    return 'Lesson(id: $id, title: $title, proggress: $proggress)';
  }
}
